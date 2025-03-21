<?php
$descripcion = 'Interfaz para crear tu cuenta ';
?>

<main class="crear">
    <h2 class="crear_heading"><?php echo $titulo; ?></h2>
    <p class="crear_descripcion">Crea tu cuenta en AgroGestión</p>

    <?php require_once __DIR__ . '/../templates/alertas.php';?>

    <form action="/crear" class="formulario" method="POST">

        <div class="formulario_campo">
            <label for="nombre" class="formulario_label">Nombres</label>
            <input 
                type="nombre"
                class="formulario_input"
                placeholder="Tus Nombres"
                id="nombre"
                name="nombre"
            >
        </div>

        <div class="formulario_campo">
            <label for="apellido" class="formulario_label">Apellidos</label>
            <input 
                type="apellido"
                class="formulario_input"
                placeholder="Tus Apellidos"
                id="apellido"
                name="apellido"
            >
        </div>

        <div class="formulario_campo">
            <label for="fecha" class="formulario_label">Tu fecha de nacimiento</label>
            <input 
                type="date"
                class="formulario_input"
                id="fecha"
                name="fecha"
            >
        </div>

        <div class="formulario_campo">
            <label for="email" class="formulario_label">Correo</label>
            <input 
                type="email"
                class="formulario_input"
                placeholder="Tu Correo"
                id="email"
                name="email"
            >
        </div>

        <div class="formulario_campo">
            <label for="password" class="formulario_label">Contraseña</label>
            <input 
                type="password"
                class="formulario_input"
                placeholder="Tu Contraseña"
                id="password"
                name="password"
            >
        </div>

        <div class="formulario_campo">
            <label for="password2" class="formulario_label">Confirma tu contraseña</label>
            <input 
                type="password"
                class="formulario_input"
                placeholder="Confirma tu contraseña"
                id="password2"
                name="password2"
            >
        </div>

        <input type="submit" class="formulario_submit" value="Crear Cuenta">

        <div class="acciones">
            <a class="acciones_enlace" href="/login">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a class="acciones_enlace" href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>
    </form>
</main>