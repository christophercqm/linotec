<template>
    <header>
        <nav class="navbar navbar-expand-lg bg-gradient d-flex flex-column">
            <div class="container max-width d-flex align-items-start">
                <!-- BLOQUE 1 - LOGO -->
                <div class="container-logo">
                    <a class="navbar-brand" href="#">
                        <img
                            :src="logo_white"
                            alt="Logo Linotec"
                            class="logo-linotec"
                        />
                    </a>
                </div>

                <!-- BLOQUE 2 -->
                <div class="container-navbar">
                    <ul class="navbar-nav ms-auto d-flex flex-column gap-2">
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/"
                                >Inicio</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/conoce-a-lino"
                                >Conoce a Lino</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/servicios"
                                >Servicios</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/contacto"
                                >Contacto</Link
                            >
                        </li>
                    </ul>
                </div>

                <!-- BLOQUE 3 - POLITICAS -->
                <div class="container-politicas">
                    <ul class="navbar-nav ms-auto d-flex flex-column gap-2">
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/"
                                >Política de privacidad</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/"
                                >Política de cookies</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/"
                                >Aviso legal</Link
                            >
                        </li>
                    </ul>
                </div>

                <!-- BLOQUE 4 - CONTACTO -->
                <div class="container-contacto">
                    <h5>Contacto</h5>
                    <div class="info d-flex flex-column gap-1">
                        <small class="mb-2">
                            Para cualquier consulta, puedes seguirnos en
                            nuestras redes sociales
                            o contactarnos a través de los siguientes enlaces.
                        </small>
                        <span class="mb-2">
                            <div class="phone d-flex gap-2">
                                <i class="bi bi-telephone-fill"></i>
                                <a
                                    href="tel:607514650"
                                    class="text-white text-decoration-none"
                                    >607 514 650</a
                                >
                            </div>
                            <small class="me-3"
                                >Lun - Vie 10am - 1pm / 5pm - 8pm</small
                            >
                        </span>
                    </div>

                    <span class="mb-2 d-flex gap-2 align-items-center">
                        <i class="bi bi-envelope-fill"></i>
                        <a
                            href="mailto:contacto@linotec.net"
                            class="text-white text-decoration-none"
                            >contacto@linotec.net</a
                        >
                    </span>

                    <div class="max-width py-2 d-flex gap-3">
                        <a
                            href="https://www.facebook.com/tu_pagina"
                            target="_blank"
                            class="social-icon"
                        >
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a
                            href="https://twitter.com/tu_usuario"
                            target="_blank"
                            class="social-icon"
                        >
                        <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>

          
            </div>

            <small class="mt-3 copyright text-center">© {{ currentYear }} todos los derechos reservados Lino Félix Fernandez Laya – Gestionado por ElAyudante

</small>
        </nav>
    </header>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import logo_white from "@images/logos/logo-linotec-white.png";

const currentYear = new Date().getFullYear();


</script>

<style scoped>
.bg-gradient {
    background-color: #005346;
    background-image: linear-gradient(
        180deg,
        #005346 0%,
        #00a29b 100%
    ); /* Gradiente */
    color: #fff;
    padding: 1rem;
}

.logo-linotec {
    width: 9rem;
    max-width: 9rem;
}

.nav-item .nav-link {
    color: #fff;
    padding: 0;
    font-family: "Kanit", sans-serif;
    font-size: 15px;
}

.max-width {
    max-width: 1250px;
}

.social-icon {
    width: 30px;
    height: 30px;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
}

.social-icon i {
    color: #00a29b;
    transition: 0.3s ease-in-out;
}

.social-icon i:hover {
    color: #005346;
}

.copyright {
    color: #C4D1EC;
}


@media (max-width: 720px) {
  .container-navbar {
    width: 100%;
  }

  .container-politicas {
    margin-top: .5rem !important;
  }

  .container-contacto {
    margin-top: 2rem;
  }
}



</style>
