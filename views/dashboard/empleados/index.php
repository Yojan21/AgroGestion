<?php
$descripcion = 'Vista para la seccion misEmpleados del usuario';
?>

<main class=" dashboard empleados">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>
    <div class="contenido empleados_contenido">

    <h2 class="empleados_heading"><?php echo $titulo; ?></h2>
    <a href="/dashboard/empleados/crear" class="empleados_boton">Nuevo Empleado</a>
    
    </div>

</main>