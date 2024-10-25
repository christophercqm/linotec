<template>
    <div
        id="carouselExample"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
        data-bs-interval="15000"
    >
        <div class="carousel-inner">
            <div
                class="carousel-item active"
                :style="{
                    backgroundImage: `url(${image_1})`,
                    backgroundSize: 'cover',
                    height: '80vh',
                }"
            >
                <div class="zoom-effect-d description-slider">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="start d-flex flex-column align-items-start">
                            <h5>Lino lo sabe muy bien</h5>
                        <h3 class="big-ttitle text-start">
                            Dicen que <br />
                            el que AVISA,<br />es avisador
                        </h3>
                        <p class="text-start info-slider">En LINOTEC tu tienda de reparación de móviles, ordenadores, portátiles, complementos <br>o tarifas de fibra y móvil en cabezón de la sal.</p>
                        <NavLink href="/">Conoce a LINO mejor</NavLink>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="carousel-item"
                :style="{
                    backgroundImage: `url(${image_2})`,
                    backgroundSize: 'cover',
                    height: '80vh',
                }"
            >
                <div class="zoom-effect-d">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="start d-flex flex-column align-items-start">
                            <h5>Lino es quien te puede ayudar</h5>
                            <h3 class="big-ttitle text-start">Si buscar a <br>alguien de <br>confianza</h3>
                            <p class="text-start info-slider">Lino es el técnico por excelencia en reparaciones de móviles, ordenadores y <br>asesor de las mejores tarifas de fibra en Cabezón de la Sal, </p>
                            <NavLink href="/">Contacta con LINO mejor</NavLink>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>

<script setup>
import image_1 from "@images/carrousel/image-1.jpg";
import image_2 from "@images/carrousel/image-2.jpg";
import NavLink from "../NavLink.vue";
</script>

<style scoped>
.carousel-item {
    height: 80vh; /* O el tamaño que prefieras */
    position: relative; /* Para que el zoom se aplique a un contenedor */
}

.zoom-effect {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    transition: transform 5s ease; /* Duración del zoom */
}

.carousel-item.active .zoom-effect {
    transform: scale(1.1); /* Escala progresiva */
}

/* Efecto fade in/out del carrusel */
.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
}
.carousel-fade .carousel-item.active {
    opacity: 1;
}


.big-ttitle {
    font-size: 109px;
    font-weight: 700;
    line-height: 1;
}

.info-slider {
    font-size: 15px;
}

.carousel-caption {
    height: 100%;
    bottom: 0 !important;
}

.carousel-caption .start {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
</style>
