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

            <?php if(is_auth()){ ?>
                <form action="/logout" method="POST" class="header_form">
                    <input class="header_submit" type="submit" value="Cerrar Sesión">
                </form>
            <?php }else{ ?>
            <a href="/login" class="header_enlace">Ingresa</a>
            <?php } ?>
        </nav>

    </div>
</header>