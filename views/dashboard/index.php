<?php
$descripcion = 'Vista para toda la información de nosotros';
?>

<main class="dashboard">
    <aside class="dashboard_sidebar">
        <?php include_once __DIR__ . '/../templates/sidebar.php'; ?>
    </aside>
    <div class="contenido">
        <h2 class="dashboard_heading"><?php echo $titulo; ?></h2>
        <p class="dashboard_nombre"> Hola: <span><?php echo $usuario; ?></span></p>

        <div class="general">
            <div class="general_tag" data-aos="fade-right">
                <h2 class="general_tag-numero"><?php echo $fincas ?></h2>
                <p class="general_tag-info">Fincas</p>
            </div>

            <div class="general_tag" data-aos="fade-left">
                <h2 class="general_tag-numero"><?php echo $empleados ?></h2>
                <p class="general_tag-info">Empleados</p>
            </div>

        </div>
    </div>
</main>