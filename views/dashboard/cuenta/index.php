<?php
$descripcion = 'Vista para la seccion miCuenta del usuario';
?>

<main class=" dashboard cuenta">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>
    <div class="contenido cuenta_contenido">

        <h2 class="cuenta_heading"><?php echo $titulo; ?></h2>
        
        <div class="cuenta_contenedor">
                <div class="cuenta_tag">

                    <div class="empleados_info">
                        <h2 class="empleados_nombre"><?php echo $empleado->nombre; ?></h2>
                        <p class="empleado_telefono"><?php echo $empleado->telefono; ?></p>
                    </div>

                </div>
        </div>

    </div>

</main>