<?php
$descripcion = 'Vista de información para contacto';
?>

<main class="contacto">

    <h2 class="contacto_heading">Contáctanos</h2>
    <p class="contacto_descripcion">Completa los siguientes campos y nos pondremos en contacto contigo en el menor tiempo posible.</p>

    <?php include __DIR__ . '/../templates/alertas.php'; ?>
    <form action="/contacto" class="formulario" method="POST">

        <div class="formulario_campo">
            <label class="formulario_label" for="nombre">Nombre</label>
            <input 
                class="formulario_input"
                type="text" 
                id="nombre" 
                name="nombre" 
                placeholder="Nombre">
        </div>

        <div class="formulario_campo">
            <label class="formulario_label" for="apellido">Apellido</label>
            <input 
                class="formulario_input"
                type="text" 
                id="apellido" 
                name="apellido" 
                placeholder="Apellido">
        </div>

        <div class="formulario_campo">
            <label class="formulario_label" for="email">Email</label>
            <input 
                class="formulario_input"
                type="email" 
                id="email" 
                name="email" 
                placeholder="Email">
        </div>

        <div class="formulario_campo">
            <label class="formulario_label" for="telefono">Teléfono</label>
            <input 
                class="formulario_input"
                type="tel" 
                id="telefono" 
                name="telefono" 
                placeholder="Teléfono">
        </div>

        <div class="formulario_campo">
        <label class="formulario_label" for="email">Mensaje</label>
            <textarea
                class="formulario_input" 
                id="mensaje"
                name="mensaje"
                placeholder="Mensaje"></textarea>
        </div>

        <input type="submit" class="formulario_submit" value="Enviar Mensaje">
    </form>
</main>