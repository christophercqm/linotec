<template>
    <div class="container-marcas">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="container-info-title ">
                        <h2 class="title text-center">
                            Marcas con las que trabajamos
                        </h2>
                        <p
                        class="text-center text-desc"
                        >Siempre buscamos los artículos y productos más
                            actuales para brindar a nuestros clientes el mejor
                            asesoramiento
                        </p>
                    </div>

                    <div class="container-marcas d-flex justify-content-center flex-wrap gap-5">
                        <div
                            class="marca"
                            v-for="(marca, index) in marcas"
                            :key="index"
                        >
                            <img :src="marca.image" :alt="marca.name" class="marca-img img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import marca_1 from "@images/marcas/digi.png";
import marca_2 from "@images/marcas/pepe.png";
import marca_3 from "@images/marcas/symyo.png";
import marca_4 from "@images/marcas/masmovil.png";
import marca_5 from "@images/marcas/orange.png";
import marca_6 from "@images/marcas/odos.png";

const marcas = [
  {
    name: "Digi",
    image: marca_1,
  },
  {
    name: "Pepephone",
    image: marca_2,
  },
  {
    name: "Symyo",
    image: marca_3,
  },
  {
    name: "MasMóvil",
    image: marca_4,
  },
  {
    name: "Orange",
    image: marca_5,
  },
  {
    name: "Odó",
    image: marca_6,
  },
];


</script>

<style scoped>
.container-padding {
    padding-top: 50px;
    padding-bottom: 50px;
}

.title {
    color: #222222;
    font-family: "Kanit", Sans-serif;
    font-size: 40px;
    font-weight: 700;
}

.text-desc {
    color: gray;
}

.container-marcas {
    max-width: 800px;
    margin: 0 auto;
}

/* Estilo para las marcas */
.container-marcas .marca {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 120px;
    height: 120px;

}


.marca-img {
    object-fit: cover; /* Mantiene la relación de aspecto de la imagen */
    border-radius: 5px;
}
</style>
