<?php
$descripcion = 'Vista para la seccion de revisar toda la informacion misEmpleados del usuario elegido';
?>

<main class=" dashboard perfil">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido empleado_contenido">

    <h2 class="empleado_heading"><?php echo $titulo; ?></h2>

    <a href="/dashboard/empleados/index" class="perfil_volver">Volver</a>

    <div class="perfil_contenedor">
        <div class="perfil_tag">
            <h2 class="perfil_tag-nombre"><?php echo $empleado->nombre ?></h2>
            <p class="perfil_tag-cedula"><?php echo 'CC: ' . $empleado->cedula; ?></p>
            <p class="perfil_tag-telefono"><?php echo 'Tel: ' . $empleado->telefono; ?></p>
            <p class="perfil_tag-cuenta"><?php echo $empleado->cuenta . ' ' . $empleado->banco; ?></p>
            <p class="perfil_tag-numero"><?php echo 'Cuenta: ' . $empleado->numero; ?></p>
        </div>
    </div>

    </div>

</main>