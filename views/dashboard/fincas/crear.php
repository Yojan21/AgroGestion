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

        <?php include_once __DIR__ . '/formulario.php'; ?>

        <input type="submit" class="formulario_submit" value="Crear">

    </form>

    </div>

</main>