<template>
    <div class="custom-container mt-5">
        <div class="custom-row">
            <div class="banner-wrapper text-center">
                <div class="banner">
                    <h1 class="banner-title">Siempre cercano y profesional</h1>
                    <img
                        src="path/to/your/image.png"
                        alt="Banner Image"
                        class="banner-image"
                    />
                </div>
            </div>
            <div class="carousel-column">
                <div class="carousel-wrapper">
                    <div class="carousel-inner">
                        <div
                            class="carousel-item fade"
                            v-for="(productGroup, index) in productGroups"
                            :key="index"
                            :class="{ active: index === currentIndex }"
                        >
                            <div class="carousel-flex">
                                <div
                                    class="product-card"
                                    v-for="(product, idx) in productGroup"
                                    :key="idx"
                                >
                                    <div class="container-image">
                                        <img
                                            :src="product.image"
                                            class="product-img"
                                            alt="Product Image"
                                        />
                                    </div>
                                    <div class="product-body">
                                        <h5 class="product-title">
                                            {{ product.title }}
                                        </h5>
                                        <h3 class="product-subtitle">
                                            {{ product.subtitle }}
                                        </h3>
                                        <p class="product-price">
                                            {{ product.price }} €
                                        </p>
                                        <a href="#" class="product-button"
                                            >View Product</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controles Personalizados -->
                    <button
                        class="carousel-control-prev"
                        @click="
                            prevSlide;
                            stopAutoSlide();
                        "
                    >
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button
                        class="carousel-control-next"
                        @click="
                            nextSlide;
                            stopAutoSlide();
                        "
                    >
                        <i class="bi bi-arrow-right"></i>
                    </button>

                    <!-- Indicadores de Puntos -->
                    <div class="carousel-indicators">
                        <span
                            v-for="(group, idx) in productGroups"
                            :key="'indicator-' + idx"
                            :class="{ active: idx === currentIndex }"
                            @click="
                                goToSlide(idx);
                                stopAutoSlide();
                            "
                        ></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import gen_sport from "@images/productos-slider/gen-sport.jpg";
import gen_slim from "@images/productos-slider/aff-gen-mobile.jpg";
import smart_box from "@images/productos-slider/smart-sound-box.jpg";
import keybouard_gen_slim from "@images/productos-slider/simple-gen-keyboard.jpg";
import slim_pad from "@images/productos-slider/slim-pad.jpg";
import pro_studio from "@images/productos-slider/pro-studio.jpg";

const products = [
    {
        title: "Grouped Gen Sport",
        subtitle: "Headphone",
        price: "200,00 - 790,00",
        image: gen_sport,
    },
    {
        title: "Ex/Aff Gen Slim",
        subtitle: "Smartphone",
        price: "7.400,00",
        image: gen_slim,
    },
    {
        title: "Variable Smart Sound Box",
        subtitle: "Box",
        price: "225,00",
        image: smart_box,
    },
    {
        title: "Simple Gen Slim PC",
        subtitle: "Keyboard",
        price: "225,00",
        image: keybouard_gen_slim,
    },
    {
        title: "11th Generation Slim",
        subtitle: "Pad",
        price: "225,00",
        image: slim_pad,
    },
    {
        title: "Pro Studio Black",
        subtitle: "Headset",
        price: "225,00",
        image: pro_studio,
    },
];

const groupProducts = (items, groupSize) => {
    return items.reduce((acc, item, index) => {
        if (index % groupSize === 0) acc.push([]);
        acc[acc.length - 1].push(item);
        return acc;
    }, []);
};

const goToSlide = (index) => {
    currentIndex.value = index;
};

const productGroups = groupProducts(products, 3);
const currentIndex = ref(0);
const totalSlides = productGroups.length;
let autoSlideInterval = null;

const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % totalSlides;
};

const prevSlide = () => {
    currentIndex.value = (currentIndex.value - 1 + totalSlides) % totalSlides;
};

const startAutoSlide = () => {
    autoSlideInterval = setInterval(nextSlide, 5000); // Cambia de slide cada 5 segundos
};

const stopAutoSlide = () => {
    clearInterval(autoSlideInterval);
};

onMounted(() => {
    startAutoSlide();
});

onBeforeUnmount(() => {
    stopAutoSlide();
});
</script>

<style scoped>
/* Contenedor general personalizado */
.custom-container {
    max-width: 1200px;
    margin: 0 auto;
}

.custom-row {
    display: flex;
    gap: 20px;
}

/* Estilo del banner */
.banner-wrapper {
    width: 30%;
}

.banner {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.banner-title {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
}

.banner-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Columna de carrusel */
.carousel-column {
    width: 70%;
}

/* Estilos del carrusel */
.carousel-wrapper {
    position: relative;
    width: 100%;
}

.carousel-inner {
    display: flex;
    overflow: hidden;
}

.carousel-item {
    display: none;
    width: 100%;
}

.carousel-item.active {
    display: flex;
    justify-content: space-around;
}

.carousel-flex {
    display: flex;
    gap: 10px;
}

/* Estilos de tarjetas de producto */
.product-card {
    width: 190px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.container-image {
    width: 100%;
    height: 190px;
}

.product-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-body {
    padding: 10px;
    text-align: center;
}

.product-title {
    font-size: 1rem;
    font-weight: bold;
}

.product-subtitle {
    font-size: 0.9rem;
    color: gray;
}

.product-price {
    font-size: 1.2rem;
    color: #333;
    margin: 5px 0;
}

.product-button {
    display: inline-block;
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border-radius: 4px;
    text-decoration: none;
}

.product-button:hover {
    background-color: #0056b3;
}

/* Controles de navegación del carrusel */
.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255, 255, 255, 0.7);
    border: none;
    border-radius: 50%;
    padding: 10px;
    cursor: pointer;
    z-index: 1000;
}

.carousel-control-prev {
    left: 10px;
}

.carousel-control-next {
    right: 10px;
}

.carousel-control-prev i,
.carousel-control-next i {
    font-size: 1.5rem;
}

.carousel-indicators {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 20px;
}

.carousel-indicators span {
    width: 10px;
    height: 10px;
    background-color: #cccccc;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s;
}

.carousel-indicators span.active {
    background-color: #333333;
}

/* Fade-in Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Aplicación de la animación en el carrusel */
.carousel-item.fade {
    opacity: 0;
    transition: opacity 0.8s ease-in-out;
}

.carousel-item.fade.active {
    opacity: 1;
    animation: fadeIn 0.8s ease-in-out;
}
</style>
