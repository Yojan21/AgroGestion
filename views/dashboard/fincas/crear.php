<?php
$descripcion = 'Vista para la seccion de crear misFincas del usuario';
?>

<main class=" dashboard finca">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido finca_contenido">

    <h2 class="fincas_heading"><?php echo $titulo; ?></h2>
    <?php include_once __DIR__ . './../../templates/alertas.php'; ?>

    <form method="POST" action="/dashboard/fincas/crear" class="formulario finca_formulario">

        <div class="formulario_campo">
            <label for="nombre" class="formulario_label">Nombre</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Nombre de tu finca"
                id="nombre"
                name="nombre"
            >
        </div>

        <div class="formulario_campo">
            <label for="departamento" class="formulario_label">Departamento</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Departamento"
                id="departamento"
                name="departamento"
            >
        </div>

        <div class="formulario_campo">
            <label for="municipio" class="formulario_label">Municipio</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Municipio"
                id="municipio"
                name="municipio"
            >
        </div>

        <div class="formulario_campo">
            <label for="vereda" class="formulario_label">Vereda</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Vereda"
                id="vereda"
                name="vereda"
            >
        </div>

        <div class="formulario_campo">
            <label for="extension" class="formulario_label">Extensión (hectáreas)</label>
            <input 
                type="number"
                class="formulario_input"
                placeholder="Ej. 15"
                id="extension"
                name="extension"
            >
        </div>

        <input type="submit" class="formulario_submit" value="Crear">

    </form>

    </div>

</main>