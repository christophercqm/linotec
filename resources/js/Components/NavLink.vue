<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

// Computed property para las clases según si el enlace está activo o no
const classes = computed(() =>
    props.active
        ? 'nav-link active' // Clases de Bootstrap para enlace activo
        : 'nav-link' // Clases de Bootstrap para enlace normal
);
</script>

<template>
    <Link :href="href" :class="classes" role="link" aria-current="page">
        <slot />
    </Link>
</template>

<style scoped>
/* Opcional: Estilos adicionales si es necesario */
.nav-link {
    font-size: 0.875rem;
    padding: 0.6rem 2rem;
    color: white;
    display: inline-block;
    border-radius: 5px;
    background-color: #00a29b;
    transition: .3s ease-in;
    font-family: "Kanit", sans-serif !important;
}


.nav-link:hover {
    color: white;
    background-color: #00a26b;

}

</style>
