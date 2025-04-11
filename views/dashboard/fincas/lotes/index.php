<?php
$descripcion = 'Vista para la seccion de los lostes de la finca seleccionada';
?>

<main class=" dashboard lotes">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido lotes_contenido">

        <h2 class="lotes_heading"><?php echo $titulo; ?></h2>

        <div class="lotes_acciones">
            <a href="/dashboard/fincas/perfil?id=<?php echo $finca->id; ?>" class=" lotes_boton lotes_volver">Volver</a>
            <a href="/dashboard/fincas/lotes/crear?id=<?php echo $finca->id; ?>" class="lotes_boton lotes_crear">Crear Lote</a>
        </div>
        

        <div class="lotes_contenedor">

        <?php foreach ($lotes as $lote): ?>
            <div class="lotes_item">
                <h4 class="lotes_nombre"><?php echo $lote->nombre; ?></h4>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

</main>