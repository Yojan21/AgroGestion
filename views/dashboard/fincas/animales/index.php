<?php
$descripcion = 'Vista para la seccion del cafe de la finca seleccionada';
?>

<main class=" dashboard animales">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido animales_contenido">

        <h2 class="animales_heading"><?php echo $titulo; ?></h2>
        <div class="animales_botones">
            <a href="/dashboard/fincas/perfil?id=<?php echo $finca->id; ?>" class="perfil_volver">
                <i class="fa-solid fa-arrow-left"></i>
            Volver</a>  
            <a href="/dashboard/fincas/animales/crear?id=<?php echo $finca->id; ?>" class="perfil_volver">
                <i class="fa-solid fa-circle-plus"></i>
            Crear</a> 
        </div>

        <div class="animales_contenedor">
            <?php foreach ($animales as $animal): ?>
                <div class="animales_contenedor-contenido">
                    <div class="animales_item">
                        <h4 class="animales_nombre"><?php echo $animal->nombre; ?></h4>
                        <p class="animales_descripcion"><?php echo $animal->raza; ?></p>

                    </div>
                    <div class="animales_acciones">

                        <a class="animales_accion animales_accion-editar" href="/dashboard/fincas/animales/editar?id=<?php echo $finca->id ?>&token=<?php echo $animal->id ?>">
                            <i class="fa-solid fa-pencil"></i>
                        Editar
                        </a>

                        <form method="POST" action="/dashboard/fincas/animales/eliminar" class="animales_formulario">
                            <input type="hidden" name="id" value="<?php echo $animal->id; ?>">
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