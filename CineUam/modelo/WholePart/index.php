<?php
include("FuncionCine.php");
include("horario.php");
include("sala.php");
include("pelicula.php");

$servername = "localhost";
$username = "root";
$password = "123456";
$database = "cineuam";

$conn = new mysqli('localhost','root','123456','cineuam'); 

$sql = "SELECT Funcion.IDFuncion, Pelicula.Nombre, Pelicula.Sinopsis, Pelicula.Genero, Pelicula.Duracion, Pelicula.ImagenPelicula, Sala.IDSala, Sala.Tipo, Horario.Fecha, Horario.HoraInicio
        FROM Funcion
        JOIN Pelicula ON Funcion.IDPelicula = Pelicula.IDPelicula
        JOIN Sala ON Funcion.IDSala = Sala.IDSala
        JOIN Horario ON Funcion.IDHorario = Horario.IDHorario";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $pelicula = new pelicula($row["IDPelicula"], $row["Nombre"], $row["Sinopsis"], $row["Duracion"], $row["ImagenPelicula"], $row["Genero"]);
        $horario = new horario($row["IDHorario"], $row["Fecha"], $row["HoraInicio"]);
        $sala = new sala($row["IDSala"], $row["IDSucursal"], $row["Asientos"], $row["Tipo"]);
        
        $funcion = new FuncionCine($pelicula, $horario, $sala);
        $funcion->mostrarCartelera();
        echo "<br>";
        echo "<br>";
    }
} 
else {
    echo "No se encontraron funciones.";
}
$conn->close();
?>
