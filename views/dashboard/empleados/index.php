<?php
$descripcion = 'Vista para la seccion misEmpleados del usuario';
?>

<main class=" dashboard empleados">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>
    <div class="contenido empleados_contenido">

    <h2 class="empleados_heading"><?php echo $titulo; ?></h2>
    <a href="/dashboard/empleados/crear" class="empleados_boton">
        <i class="fa-solid fa-circle-plus"></i> 
        Nuevo Empleado
    </a>
    
    <div class="empleados_contenedor">

        <?php foreach($empleados as $empleado): ?>
            <div class="empleados_tag">

                <div class="empleados_info">
                    <h2 class="empleados_nombre"><?php echo $empleado->nombre; ?></h2>
                    <p class="empleado_telefono"><?php echo $empleado->telefono; ?></p>
                </div>

                <div class="empleados_acciones">

                    <a class="empleados_accion empleados_accion-gestionar" href="/dashboard/empleados/perfil?id=<?php echo $empleado->id ?>">
                        <i class="fa-solid fa-circle-info"></i>
                    Mas info
                    </a>

                    <a class="empleados_accion empleados_accion-editar" href="/dashboard/empleados/editar?id=<?php echo $empleado->id ?>">
                        <i class="fa-solid fa-pencil"></i>
                    Editar
                    </a>

                    <form method="POST" action="/dashboard/empleados/eliminar" class="empleados_formulario">
                        <input type="hidden" name="id" value="<?php echo $empleado->id; ?>">
                        <button class="empleados_accion empleados_accion-eliminar" type="submit">
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