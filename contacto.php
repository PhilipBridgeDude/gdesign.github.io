<?php require_once 'includes/header.php'?>
<?php require_once 'recaptchalib.php'?>
    <style>
        .isotipo-nav{
            opacity: 1 !important;
        }
    </style>
<div class="row contacto">
        <div class="col-sm-4">
            <div id="carruselContacto" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators" style="pointer-events:none;visibility:hidden;">
                    <button type="button" data-bs-target="#carruselContacto" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carruselContacto" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carruselContacto" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tu marca es más que un simbolo.</h5>
                        <h5>Es todo lo que haces con ella.</h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Segundo slide</h5>
                        <h5>Texto de prueba</h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tercer slide</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 form">
            <form id="formulario" class="formulario" name="formulario" method="post" action="enviar.php">
                <label for="nombre">Nombre</label>
                <input title="Nombre y apellido" type="text" id="nombre" name="nombre" required></input>
                <label for="correo">Correo</label>
                <input title="Correo electrónico" type="email" id="correo" name="correo" required></input>
                <label for="mensaje">Mensaje</label>
                <textarea title="Escriba el mensaje que desea enviar" id="mensaje" name="mensaje" required></textarea>
                <input title="Enviar" type="submit" id="btn-enviar" value="Enviar"></input>
                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
            </form>
        </div>
        <div class="col-sm-4 titulo-cont">
            <img class="logo-hor" src="img/logocolorhorizontal.svg" alt="logoColorHorizontal">
            <h1>Hagamos contacto.</h1>
        </div>
    </div>
    <div>
        <img class="logo-mitad" src="img/logomitad.svg" alt="logomitad">
        <img class="elm1" src="img/elements/elementomovil1.svg" alt="elm1">
        <img class="elm2" src="img/elements/elementomovil2.svg" alt="elm2">
        <img class="elm3" src="img/elements/elementomovil3.svg" alt="elm3">
        <img class="elm4" src="img/elements/elementomovil4.svg" alt="elm4">
        <img class="elm5" src="img/elements/elementomovil5.svg" alt="elm5">
        <img class="elm6" src="img/elements/elementomovil6.svg" alt="elm6">
        <img class="elm7" src="img/elements/elementomovil7.svg" alt="elm7">
        <img class="elm8" src="img/elements/elementomovil8.svg" alt="elm8">
        <img class="elm9" src="img/elements/elementomovil9.svg" alt="elm9">
        <img class="elm10" src="img/elements/elementomovil10.svg" alt="elm10">
        <img class="elm11" src="img/elements/elementomovil10.svg" alt="elm11">
        <img class="elm12" src="img/elements/elementomovil10.svg" alt="elm12">
    </div>
<?php require_once 'includes/footer.php'?>