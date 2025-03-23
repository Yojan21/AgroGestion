<?php
$descripcion = 'Vista para la seccion misFincas del usuario';
?>

<main class=" dashboard fincas">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>
    <div class="contenido fincas_contenido">

    <h2 class="fincas_heading"><?php echo $titulo; ?></h2>
    <a href="/dashboard/fincas/crear" class="fincas_boton">Nueva Finca</a>
    
    </div>

</main>