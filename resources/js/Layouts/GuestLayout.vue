<script setup>
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


<style>
:root {
    --green: #00A29B;          /* Verde principal */
    --white: #fff;             /* Blanco */
    --green-text: #005346;     /* Verde oscuro para texto */
    --gray: #eeedea;           /* Gris claro */
    --green-secondary: #00a26b;/* Verde secundario */
    --black: #000;             /* Negro */
    --border-radius: 5px;      /* Radio de borde */
    --kanit: "Kanit", sans-serif; /* Fuente Kanit */
    --raleway: "Raleway", serif; /* Fuente Raleway */
    --bg-white: rgba(196, 208, 235, .3);

}

body {
    font-family: var(--kanit) !important;
}

h1,h2,h3,h4,h5,h6 {
    font-family: var(--kanit) !important;
}

a {
    text-decoration: none;
    color: currentColor;
}

.bg-whitee {
    background-color: var(--bg-white) !important;
}
.border-radius   {
    border-radius: var(--border-radius);
}

.paddin-y {
    padding-top: 60px !important;
    padding-bottom: 60px !important;
}



.btn-public {
    font-size: 0.875rem;
    padding: .7rem 3rem;
    color: white;
    display: inline-block;
    border-radius: 5px;
    background-color: var(--green);
    transition: .3s ease-in;
    font-family: var(--kanit);
    font-size: 16px !important;
}


.green {
    color: var(--green-secondary);
}


.btn-public:hover {
    color: white;
    background-color: var(--green-secondary);

}

p,
a,
span {

    font-family: var(--raleway) !important;
}



</style>
