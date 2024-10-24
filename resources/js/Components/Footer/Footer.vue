<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <ApplicationLogo class="h-20 w-20 fill-current text-gray-500" />
                    Linotec
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <Link class="nav-link active" aria-current="page" href="/">Inicio</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/conoce-a-lino">Conoce a Lino</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/servicios">Servicios</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="/contacto">Contacto</Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<style scoped>
.nav-link {
    font-size: 16px;
    color: #333;
    transition: color 0.3s;
}

.nav-link:hover {
    color: #007bff; /* Cambia a color primario de Bootstrap */
}
</style>
