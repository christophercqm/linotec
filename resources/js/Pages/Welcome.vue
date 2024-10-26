<template>
    <GuestLayout>
        <div id="productos">
            <Productos />
        </div>

        <div id="carrousel">
            <Carrousel />
        </div>

        <div id="conoce-a-lino">
            <ConoceLino />
        </div>
        <div id="carrousel-productos">
            <CarrouselProductos />
        </div>

        <div id="servicios">
            <FlipingCard></FlipingCard>
        </div>

        <div id="marcas">
            <MarcasTrabajamos></MarcasTrabajamos>
        </div>

        <div id="contacto">
            <ContactForm></ContactForm>
        </div>

        <FloatingActionButton></FloatingActionButton>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Productos from '@/Components/Productos/Productos.vue';
import Carrousel from '@/Components/Carrousel/Carrousel.vue';
import ConoceLino from '@/Components/ConoceLino/ConoceLino.vue';
import CarrouselProductos from '@/Components/CarrouselProductos/CarrouselProductos.vue';
import FlipingCard from '@/Components/FlipingCard/FlipingCard.vue';
import MarcasTrabajamos from '@/Components/MarcasTrabajamos/MarcasTrabajamos.vue';
import FloatingActionButton from '@/Components/FloatingActionButton/FloatingActionButton.vue';
import ContactForm from '@/Components/ContactForm/ContactForm.vue';

</script>

<style scoped>
html {
    scroll-behavior: smooth; /* Aplica el desplazamiento suave a toda la página */
}
</style>
