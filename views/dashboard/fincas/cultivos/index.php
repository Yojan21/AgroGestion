<?php
$descripcion = 'Vista para la seccion del cafe de la finca seleccionada';
?>

<main class=" dashboard cultivos">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido cultivos_contenido">

        <h2 class="cultivos_heading"><?php echo $titulo; ?></h2>  
        <a href="/dashboard/fincas/perfil?id=<?php echo $finca->id; ?>" class="perfil_volver">Volver</a>  

    </div>

</main>