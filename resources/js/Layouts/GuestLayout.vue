<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';

import Header from '@/Components/Header/Header.vue';
import Footer from '@/Components/Footer/Footer.vue';

</script>

<template>
    <div class="d-flex flex-column min-vh-100 bg-light">
        <!-- Encabezado -->
        <Header />

        <!-- Contenido principal -->
        <main class="flex-grow-1 d-flex align-items-center justify-content-center">
            <div class="w-100  bg-white">
                <slot />
            </div>
        </main>

        <!-- Pie de página -->
        <Footer />
    </div>
</template>
