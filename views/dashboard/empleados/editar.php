<?php
$descripcion = 'Vista para la seccion de editar misEmpleados del usuario';
?>

<main class=" dashboard empleado">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido empleado_contenido">

    <h2 class="empleados_heading"><?php echo $titulo; ?></h2>
    <div class="perfil_botones">
        <a href="/dashboard/empleados/index" class="perfil_volver">
            <i class="fa-solid fa-arrow-left"></i>
        Volver</a>
    </div>
    <?php include_once __DIR__ . './../../templates/alertas.php'; ?>

    <form method="POST"  class="formulario empleado_formulario">

        <?php include_once __DIR__ . '/formulario.php'; ?>

        <input type="submit" class="formulario_submit" value="Editar">

    </form>

    </div>

</main>