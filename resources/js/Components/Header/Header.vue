<template>
    <header class="container-header">
        <div class="container max-width w-100">
            <div class="row">
                <div class="col">
                    <div class="redes-top max-width w-100">
                        <div class="py-2 d-flex gap-3">
                            <a href="https://www.facebook.com/tu_pagina" target="_blank" class="social-icon">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://twitter.com/tu_usuario" target="_blank" class="social-icon">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gradient full-width py-3 d-flex">
            <div class="header-medium max-width d-flex align-items-center justify-content-between w-100">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img :src="logo_white" class="logo-linotec" alt="Logo Linotec" />
                </a>
                <div class="contact-info d-flex flex-column">
                    <span class="me-3 tel-contact">
                        <i class="bi bi-telephone-fill"></i> 607 514 650
                    </span>
                    <small class="me-3">Lun-Vie 10am - 1pm / 5pm - 8pm</small>
                </div>
                <div class="container-email">
                    <span class="me-3">
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:contacto@linotec.net" class="text-white text-decoration-none email-contanct">contacto@linotec.net</a>
                    </span>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-personal navbar-expand-lg bg-white" :class="{ 'navbar-fixed': isFixed }">
            <div class="container max-width">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#conoce-a-lino" @click.prevent="smoothScroll('#conoce-a-lino')">Conoce a Lino</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr style="margin: 0 !important" />
    </header>
</template>

<script setup>
import logo_white from "@images/logos/logo-linotec-white.png";
import logo_green from "@images/logos/logo-linotec-green.png";
import { ref, onMounted, onUnmounted } from "vue";

const isFixed = ref(false);

const handleScroll = () => {
    isFixed.value = window.scrollY > 50; // Ajusta este valor según el desplazamiento deseado
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});

// Función para el desplazamiento suave
const smoothScroll = (target) => {
    const element = document.querySelector(target);
    if (element) {
        const elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({
            top: elementPosition,
            behavior: 'smooth' // Asegúrate de que este valor está correctamente establecido
        });
    }
};
</script>

<style scoped>
html {
    scroll-behavior: smooth; /* Aplica el desplazamiento suave a toda la página */
}
</style>

<style scoped>
html {
    scroll-behavior: smooth; /* Desplazamiento suave */
}
.max-width {
    max-width: 1250px;
    width: 1250px;
    margin-left: auto;
    margin-right: auto;
}

/* Estado inicial del navbar antes de desplazarse */
.navbar-personal {
    transition: opacity 0.4s ease, transform 0.4s ease;
    opacity: 1;
    transform: translateY(0);
}

/* Estado al hacer scroll */
.navbar-fixed {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: white; /* Fondo sólido para el navbar */
    transition: opacity 0.4s ease, transform 0.4s ease;
}

/* Efectos de transición */
.navbar-fixed .logo,
.navbar-fixed .redes-top {
    display: block !important;
    opacity: 1;
    transition: opacity 0.4s ease, transform 0.4s ease;
}

/* Visibilidad de la logo y redes al ser fixed */
.navbar-fixed .logo,
.navbar-fixed .redes-top {
    display: block !important;
}

.logo-linotec {
    width: 9rem;
    max-width: 9rem;
}

.nav-link {
    padding: 0.6rem 2rem;
    border-radius: 5px;
    color: #00a29b;
    transition: 0.3s ease-in;
    font-family: "Kanit", sans-serif !important;
    font-weight: 400;
}

.bg-gradient {
    background-color: #005346; /* Color de fondo por defecto */
    background-image: linear-gradient(180deg, #005346 0%, #00a29b 100%) !important;
    color: #fff;
}

.contact-info span,
.container-email span {
    display: flex;
    align-items: center;
}

.contact-info i,
.container-email i {
    margin-right: 0.5rem;
}

.social-icon {
    background-color: #00a29b;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}

.social-icon i {
    padding: 0.5rem;
    font-size: 1.2rem;
    transition: 0.3s ease-in-out;
    color: white;
}

.social-icon i:hover {
    color: #005346;
}

.navbar-nav .nav-item a {
    font-size: 14px;
    color: #005346;
    font-weight: 500;
}

.email-contanct,
.tel-contact {
    font-weight: bold;
}

@media (max-width: 768px) {
    .contact-info,
    .container-email {
        display: none !important;
    }
}

@media (min-width: 769px) {
    .contact-info,
    .container-email {
        display: block;
    }
}
</style>
