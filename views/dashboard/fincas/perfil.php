<?php
$descripcion = 'Vista para la seccion de revisar toda la informacion misFincas de la finca elegida';
?>

<main class=" dashboard perfil">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido empleado_contenido">

    <h2 class="empleado_heading"><?php echo $titulo; ?></h2>

    <a href="/dashboard/fincas/index" class="perfil_volver">Volver</a>

    <div class="perfil_contenedor">
        <div class="perfil_tag">
            <h2 class="perfil_tag-nombre"><?php echo $finca->nombre ?></h2>
            <p class="perfil_tag-cedula"><?php echo $finca->vereda . ', ' . $finca->municipio;?></p>
            <p class="perfil_tag-telefono"><?php echo $finca->extension . ' Hectáreas'; ?></p>
        </div>
    </div>

    </div>

</main>