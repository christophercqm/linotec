<template>
    <header class="container-header">
        <div class="redes-top">
            <div class="max-width py-2 d-flex gap-3">
                <a href="https://www.facebook.com/tu_pagina" target="_blank" class="social-icon">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com/tu_usuario" target="_blank" class="social-icon">
                    <i class="bi bi-twitter"></i> <!-- Cambié 'bi-twitter-x' a 'bi-twitter' para el icono correcto -->
                </a>
            </div>
        </div>
        <div class="bg-gradient full-width py-3">
            <div class="header-medium max-width d-flex align-items-center justify-content-between">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img :src="logo_white" class="logo-linotec" alt="Logo Linotec" />
                </a>
                <div class="contact-info d-flex flex-column">
                    <span class="me-3">
                        <i class="bi bi-telephone-fill"></i> 607 514 650
                    </span>
                    <small class="me-3">Lun-Vie 10am - 1pm / 5pm - 8pm</small>
                </div>
                <div class="container-email">
                    <span class="me-3">
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:contacto@linotec.net" class="text-white text-decoration-none">contacto@linotec.net</a>
                    </span>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <NavLink class="nav-link" aria-current="page" href="/">Inicio</NavLink>
                        </li>
                        <li class="nav-item">
                            <NavLink class="nav-link" href="/conoce-a-lino">Conoce a Lino</NavLink>
                        </li>
                        <li class="nav-item">
                            <NavLink class="nav-link" href="/servicios">Servicios</NavLink>
                        </li>
                        <li class="nav-item">
                            <NavLink class="nav-link" href="/blog">Blog</NavLink>
                        </li>
                        <li class="nav-item">
                            <NavLink class="nav-link" href="/faq">FAQ</NavLink>
                        </li>
                        <li class="nav-item">
                            <NavLink class="nav-link" href="/contacto">Contacto</NavLink>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <hr style="margin: 0 !important;">
    </header>
</template>

<script setup>
import NavLink from "../NavLink.vue";
import logo_white from "@images/logos/logo-linotec-white.png";
</script>

<style scoped>
.max-width {
    max-width: 1250px;
    width: 1250px;
    margin-left: auto;
    margin-right: auto;
}

.logo-linotec {
    width: 9rem;
    max-width: 9rem;
}



.nav-link:hover {
    color: #007bff; /* Color en hover */
}

.nav-link.active {
    color: red; /* Color para el enlace activo */
}

.bg-gradient {
    background-color: #005346; /* Color de fondo por defecto */
    background-image: linear-gradient(180deg, #005346 0%, #00a29b 100%); /* Gradiente */
    color: #fff; 
    padding: 1rem;
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

.social-icon i {
    color: #00A29B;
    transition: .3s ease-in-out;
}

.social-icon i:hover {
    color: #005346;
}


.navbar-nav .nav-item a{
    font-size: 14px;
    color: #005346;
    font-weight: 500;
}
</style>
