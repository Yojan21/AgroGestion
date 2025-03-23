<?php
$descripcion = 'Vista para la seccion de crear misEmpleados del usuario';
?>

<main class=" dashboard empleado">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido empleado_contenido">

    <h2 class="empleado_heading"><?php echo $titulo; ?></h2>
    <?php include_once __DIR__ . './../../templates/alertas.php'; ?>

    <form method="POST" action="/dashboard/empleados/crear" class="formulario empleado_formulario">

        <div class="formulario_campo">
            <label for="nombre" class="formulario_label">Nombre</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Nombre de tu empleado"
                id="nombre"
                name="nombre"
            >
        </div>

        <div class="formulario_campo">
            <label for="cedula" class="formulario_label">Cédula</label>
            <input 
                type="number"
                class="formulario_input"
                placeholder="Cédula"
                id="cedula"
                name="cedula"
            >
        </div>

        <div class="formulario_campo">
            <label for="telefono" class="formulario_label">Teléfono</label>
            <input 
                type="tel"
                class="formulario_input"
                placeholder="Teléfono"
                id="telefono"
                name="telefono"
            >
        </div>

        <div class="formulario_campo">
            <label for="cuenta" class="formulario_label">Tipo de cuenta</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Ej. Ahorros"
                id="cuenta"
                name="cuenta"
            >
        </div>

        <div class="formulario_campo">
            <label for="banco" class="formulario_label">Banco</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Ej. Bancolombia"
                id="banco"
                name="banco"
            >
        </div>

        <div class="formulario_campo">
            <label for="numero" class="formulario_label">Número de cuenta</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Número de cuenta"
                id="numero"
                name="numero"
            >
        </div>



        <input type="submit" class="formulario_submit" value="Crear">

    </form>

    </div>

</main>