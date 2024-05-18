<fieldset>
    <legend>Información General</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="administrador[nombre]" placeholder="Nombre administrador" value="<?php echo s( $administrador->nombre ); ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="administrador[apellido]" placeholder="Apellido administrador" value="<?php echo s( $administrador->apellido ); ?>">

    <label for="correo">Correo:</label>
    <input type="text" id="correo" name="administrador[correo]" placeholder="correo administrador" value="<?php echo s( $administrador->correo ); ?>">

    <label for="contrasena">Contraseña:</label>
    <input type="text" id="contrasena" name="administrador[contrasena]" placeholder="contrasena administrador" value="<?php echo s( $administrador->contrasena ); ?>">

</fieldset>

</fieldset>

