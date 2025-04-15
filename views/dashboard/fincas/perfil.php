<?php
$descripcion = 'Vista para la seccion de revisar toda la informacion misFincas de la finca elegida';
?>

<main class=" dashboard perfil">

    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../../templates/sidebar.php'; ?>
    </aside>

    <div class="contenido finca_contenido">

        <h2 class="finca_heading"><?php echo $titulo; ?></h2>
        <div class="perfil_botones">
            <a href="/dashboard/fincas/index" class="perfil_volver">
                <i class="fa-solid fa-arrow-left"></i>Volver
            </a>
        </div>

        <div class="tarjetas_contenedor">

            <div class="tarjetas_tarjeta">
                <a class="tarjetas_tarjeta_enlace" href="/dashboard/fincas/lotes/index?id=<?php echo $finca->id ?>">
                    <h3 class="tarjetas_tarjeta_titulo">Mis Lotes</h3>
                    <p class="tarjetas_tarjeta_comentario">Crear, edita o elimina los lotes de tu finca</p>
                </a>
            </div>
            <div class="tarjetas_tarjeta">
                <a class="tarjetas_tarjeta_enlace" href="/dashboard/fincas/cultivos/index?id=<?php echo $finca->id ?>">
                    <h3 class="tarjetas_tarjeta_titulo">Mis Cultivos</h3>
                    <p class="tarjetas_tarjeta_comentario">Puedes crear cuantos cultivos quieras, eliminalos o editalos</p>
                </a>
            </div>
            <div class="tarjetas_tarjeta">
                <a class="tarjetas_tarjeta_enlace" href="/dashboard/fincas/animales/index?id=<?php echo $finca->id ?>">
                    <h3 class="tarjetas_tarjeta_titulo">Mis Animales</h3>
                    <p class="tarjetas_tarjeta_comentario">Puedes crear toda un lista de los animales de tu finca y editarlos a tu manera</p>
                </a>
            </div>
        </div>

    </div>

</main>