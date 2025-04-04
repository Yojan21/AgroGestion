<?php
$descripcion = 'Interfaz para el header del layout de usuario';
?>

<header class="header">

    <div class="header_contenedor">

        <div class="header_nombre">
            <a href="/">
                <h1 class="header_heading">Agro<span>Gestión</span></h1>
            </a>
        </div>

        <nav class="header_navegacion">
            <a href="/" class="header_enlace">Inicio</a>
            <a href="/nosotros" class="header_enlace">Nosotros</a>
            <a href="/contacto" class="header_enlace">Contacto</a>
            <a href="/planes" class="header_enlace">Planes</a>

            <?php if(is_auth()){ ?>
                <a href="/dashboard/index" class="header_enlace">Administrar</a>
                <form action="/logout" method="POST" class="header_form header_enlace">
                    <input class="header_submit" type="submit" value="Cerrar Sesión">
                </form>
            <?php }else{ ?>
            <a href="/login" class="header_enlace">Ingresa</a>
            <?php } ?>
        </nav>

    </div>
</header>