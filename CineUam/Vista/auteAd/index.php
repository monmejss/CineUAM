
<main class="contenedor seccion">
    <h1>Administrador</h1>
    <?php 
        $mensaje = mostrarNotificacion( intval( $resultado) );
        if($mensaje) { ?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>
        <?php } 
    ?>

</main>