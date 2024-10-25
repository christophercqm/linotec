<template>
    <div
        id="conoce-a-lino"
        :style="{ backgroundImage: `url(${bg_lino})` }"
        class="container-conoce-lino d-flex align-items-center"
    >
        <div class="overlay"></div>
        <div class="container max-width">
            <div class="col-12">
                <div class="row">
                    <div class="info-conoce-lino">
                        <h2 class="title text-white">¿Qué encontrarás en LINO?</h2>
                        <p class="text-white text-info">
                            En la tienda de LINO, podrás descubrir todos los
                            servicios pensados para cubrir tus necesidades
                            informáticas y electrónicas. LINO es técnico
                            informático y experto en la reparación de móviles y
                            ordenadores; además, es la persona ideal para
                            asesorarte sobre las mejores tarifas de fibra.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import bg_lino from "@images/bg-lino.png";
</script>

<style scoped>
.container-conoce-lino {
    background-size: cover;
    background-position: center;
    min-height: 500px;
    position: relative;

}

.container.max-width {  
    z-index: 1;
}
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background-color: #005346 !important;
    mix-blend-mode: hard-light;
}

.max-width {
    max-width: 1250px;
    padding: 0;
}

.info-conoce-lino {
    z-index: 3;
}

 .title{
    font-family: "Kanit", Sans-serif;
    font-size: 40px;
    font-weight: 700;
}
.text-info {
    max-width: 600px;
    text-align: justify;
}
</style>
