<?php
$descripcion = 'Vista para la creacion de un animal de la finca seleccionada';
?>

<main class=" dashboard animales_crud">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido animales_crud_contenido">

        <h2 class="animales_crud_heading"><?php echo $titulo; ?></h2>

        <div class="animales_crud_acciones animales_crud_botones">
            <a href="/dashboard/fincas/animales/index?id=<?php echo $finca->id; ?>" class=" lotes_crud_boton lotes_crud_volver">
                <i class="fa-solid fa-arrow-left"></i>
            Volver</a>
        </div>

        <div class="animales_crud_contenedor">

        <?php include __DIR__ .  '../../../../templates/alertas.php';?>
            <form method="POST" class="animales_crud_formulario formulario">
                <fieldset class="formulario_fieldset">
                    <legend class="formulario_legend">Completa todos los campos</legend>
                    <?php include_once __DIR__ . '/formulario.php'; ?>
                    <input type="submit" class="formulario_submit" value="Crear">
                </fieldset>
            </form>


        </div>
    </div>

</main>