<?php
$descripcion = 'Vista para la seccion de revisar toda la informacion misFincas de la finca elegida';
?>

<main class=" dashboard perfil">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido finca_contenido">

        <h2 class="finca_heading"><?php echo $titulo; ?></h2>

        <a href="/dashboard/fincas/index" class="perfil_volver">Volver</a>

        <div class="tarjetas_contenedor">

            <div class="tarjetas_tarjetatarjetas_tarjeta">
                <a class="tarjetas_tarjeta_enlace" href="/dashboard/fincas/lotes/index?id=<?php echo $finca->id ?>">
                    <h3 class="tarjetas_tarjeta_titulo">Mis Lotes</h3>
                    <p class="tarjetas_tarjeta_comentario">En esta sección puedes controlar todo lo relacionado con los lotes de tu finca <?php echo $finca->nombre; ?></p>
                </a>
            </div>
            <div class="tarjetas_tarjeta">
                <a class="tarjetas_tarjeta_enlace" href="/dashboard/fincas/cultivos/index?id=<?php echo $finca->id ?>">
                    <h3 class="tarjetas_tarjeta_titulo">Mis Cultivos</h3>
                    <p class="tarjetas_tarjeta_comentario">En esta sección puedes controlar todo lo relacionado con los cultivos adicionales de tu finca <?php echo $finca->nombre; ?></p>
                </a>
            </div>
            <div class="tarjetas_tarjetatarjetas_tarjeta">
                <a class="tarjetas_tarjeta_enlace" href="/dashboard/fincas/animales/index?id=<?php echo $finca->id ?>">
                    <h3 class="tarjetas_tarjeta_titulo">Mis Animales</h3>
                    <p class="tarjetas_tarjeta_comentario">En esta sección puedes controlar todo lo relacionado con los animales de tu finca <?php echo $finca->nombre; ?></p>
                </a>
            </div>
        </div>

    </div>

</main>