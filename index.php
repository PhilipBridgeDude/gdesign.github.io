<?php require_once 'includes/header.php'?>
<style>
    .isotipo-nav {
        opacity: 0;
    }
</style>
<div class="row land-info">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 info">
        <div class="text">
            <h2>Qué pasa con</h2>
            <h1>tu Marca?</h1>
        </div>
        <div id="carrusel-land" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carrusel-land" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carrusel-land" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carrusel-land" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrusel-land" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrusel-land" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <button class="ver-mas" onclick="openNav()">Ver más</button>
    </div>
    <div class="col-sm-4"></div>
</div>
<div>
    <img class="logo" src="img/logocolor.svg" alt="logo">
    <img class="flechaIzq" src="img/elements/flecha.svg" alt="flechaIzq">
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