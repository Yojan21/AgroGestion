<?php
$descripcion = 'Vista para la seccion misFincas del usuario';
?>

<main class=" dashboard fincas">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido fincas_contenido">

    <h2 class="fincas_heading"><?php echo $titulo; ?></h2>
    <div class="fincas_botones">
        <a href="/dashboard/fincas/crear" class="fincas_crear">
            <i class="fa-solid fa-circle-plus"></i> 
            Nueva Finca
        </a>
    </div>

    <div class="fincas_contenedor">
            <?php foreach ($fincas as $finca): ?>
                <div class="fincas_tag">

                    <div class="fincas_info">
                        <h2 class="finca_tag-nombre"><?php echo $finca->nombre; ?></h2>
                        <p class="finca_tag-vereda">Ubicación: Vereda <?php echo $finca->vereda; ?></p>
                        <p class="finca_tag-vereda">Extensión: <?php echo $finca->extension; ?> Hectáreas</p>
                    </div>

                    <div class="fincas_acciones">

                        <a class="fincas_accion fincas_accion-gestionar" href="/dashboard/fincas/perfil?id=<?php echo $finca->id ?>">
                            <i class="fa-solid fa-circle-info"></i>
                        Mas info
                        </a>

                        <a class="fincas_accion fincas_accion-editar" href="/dashboard/fincas/editar?id=<?php echo $finca->id ?>">
                            <i class="fa-solid fa-pencil"></i>
                        Editar
                        </a>

                        <form method="POST" action="/dashboard/fincas/eliminar" class="fincas_formulario">
                            <input type="hidden" name="id" value="<?php echo $finca->id; ?>">
                            <button class="fincas_accion fincas_accion-eliminar" type="submit">
                                <i class="fa-solid fa-circle-xmark"></i>
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div> <!-- Cierro tag -->
            <?php endforeach; ?>

    </div>
    
    </div>

</main>