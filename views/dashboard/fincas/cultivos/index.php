<?php
$descripcion = 'Vista para la seccion del cafe de la finca seleccionada';
?>

<main class=" dashboard cultivos">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido cultivos_contenido">

        <h2 class="cultivos_heading"><?php echo $titulo; ?></h2>  

        <div class="cultivos_botones">
            <a href="/dashboard/fincas/perfil?id=<?php echo $finca->id; ?>" class="perfil_volver">
                <i class="fa-solid fa-arrow-left"></i>
            Volver</a>  
            <a href="/dashboard/fincas/cultivos/crear?id=<?php echo $finca->id; ?>" class="perfil_volver">
                <i class="fa-solid fa-circle-plus"></i>
            Crear</a> 
        </div>

        <div class="cultivos_contenedor">
            <?php foreach ($cultivos as $cultivo): ?>
                    <div class="cultivos_contenedor-contenido">
                        <div class="cultivos_item">
                            <h4 class="cultivos_nombre"><?php echo $cultivo->nombre; ?></h4>
                            <p class="cultivos_descripcion"><?php echo $cultivo->descripcion; ?></p>
                            <p class="cultivos_descripcion"><?php echo $cultivo->cantidad; ?></p>

                        </div>
                        <div class="cultivos_acciones">

                            <a class="cultivos_accion cultivos_accion-editar" href="/dashboard/fincas/cultivos/editar?id=<?php echo $finca->id ?>&token=<?php echo $cultivo->id ?>">
                                <i class="fa-solid fa-pencil"></i>
                            Editar
                            </a>

                            <form method="POST" action="/dashboard/fincas/cultivos/eliminar" class="cultivos_formulario">
                                <input type="hidden" name="id" value="<?php echo $cultivo->id; ?>">
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