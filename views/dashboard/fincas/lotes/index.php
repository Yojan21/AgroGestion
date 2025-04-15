<?php
$descripcion = 'Vista para la seccion de los lostes de la finca seleccionada';
?>

<main class=" dashboard lotes">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido lotes_contenido">

        <h2 class="lotes_heading"><?php echo $titulo; ?></h2>

        <div class="lotes_botones">
            <a href="/dashboard/fincas/perfil?id=<?php echo $finca->id; ?>" class=" lotes_boton lotes_volver">
                <i class="fa-solid fa-arrow-left"></i>
            Volver</a>
            <a href="/dashboard/fincas/lotes/crear?id=<?php echo $finca->id; ?>" class="lotes_boton lotes_crear">
                <i class="fa-solid fa-circle-plus"></i>
            Crear Lote</a>
        </div>
        

        <div class="lotes_contenedor">

            <?php foreach ($lotes as $lote): ?>
                <div class="lotes_contenedor-contenido">
                    <div class="lotes_item">
                        <h4 class="lotes_nombre"><?php echo $lote->nombre; ?></h4>
                        <p class="lotes_descripcion"><?php echo $lote->descripcion; ?></p>
                    </div>
                    <div class="lotes_acciones">

                        <a class="lotes_accion lotes_accion-editar" href="/dashboard/fincas/lotes/editar?id=<?php echo $finca->id ?>&token=<?php echo $lote->id ?>">
                            <i class="fa-solid fa-pencil"></i>
                        Editar
                        </a>

                        <form method="POST" action="/dashboard/fincas/lotes/eliminar" class="lotes_formulario">
                            <input type="hidden" name="id" value="<?php echo $lote->id; ?>">
                            <button class="lotes_accion lotes_accion-eliminar" type="submit">
                                <i class="fa-solid fa-circle-xmark"></i>
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</main>