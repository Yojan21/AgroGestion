<?php
$descripcion = 'Vista para la creacion de un lote de la finca seleccionada';
?>

<main class=" dashboard lotes">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido lotes_contenido">

        <h2 class="lotes_heading"><?php echo $titulo; ?></h2>

        <div class="lotes_acciones">
            <a href="/dashboard/fincas/lotes/index?id=<?php echo $finca->id; ?>" class=" lotes_boton lotes_volver">Volver</a>
        </div>

        <div class="lotes_contenedor">

        <?php include __DIR__ .  '../../../../templates/alertas.php';?>
            <form method="POST" class="lotes_formulario formulario">
                <fieldset class="formulario_fieldset">
                    <legend class="formulario_legend">Completa todos los campos</legend>
                    <?php include_once __DIR__ . '/formulario.php'; ?>
                    <input type="submit" class="formulario_submit" value="Crear">
                </fieldset>
            </form>


        </div>
    </div>

</main>