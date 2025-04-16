<?php
$descripcion = 'Vista para la edicion de un cultivo de la finca seleccionada';
?>

<main class=" dashboard cultivos_crud">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido cultivos_crud_contenido">
        <h2 class="cultivos_crud_heading"><?php echo $titulo; ?></h2>

        <div class="cultivos_crud_acciones cultivos_crud_botones">
            <a href="/dashboard/fincas/cultivos/index?id=<?php echo $finca->id; ?>" class=" cultivos_crud_boton cultivos_crud_volver">
                <i class="fa-solid fa-arrow-left"></i>
            Volver</a>
        </div>

        <div class="cultivos_crud_contenedor">
        <?php include __DIR__ .  '../../../../templates/alertas.php';?>
            <form method="POST" class="cultivos_crud_formulario formulario">
                <fieldset class="formulario_fieldset">
                    <legend class="formulario_legend">Completa todos los campos</legend>
                    <?php include_once __DIR__ . '/formulario.php'; ?>
                    <input type="submit" class="formulario_submit" value="Editar">
                </fieldset>
            </form>
        </div>
    </div>
</main>