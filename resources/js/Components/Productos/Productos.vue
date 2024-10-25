<template>
    <div class="container max-width">
        <div class="row row-productos">
      <div class="col" v-for="(product, index) in products" :key="index">
        <div class="product d-flex flex-column justify-center gap-2 align-items-center p-3">
          <div class="container-image">
            <img :src="product.image" :alt="product.alt" class="img-fluid" />
          </div>
          <h3 class="title-img text-dark">{{ product.title }}</h3>
        </div>
      </div>
    </div>
    </div>

  </template>
  
  <script setup>
  import reparaciones from '@images/productos/computadora-portatil.png';
  import complementos from '@images/productos/auricular.png';
  import mobiles_tablet from '@images/productos/tableta-grafica.png';
  import tarifa_fibra from '@images/productos/telefono-inteligente.png';
  import ordenadores from '@images/productos/ordenador-portatil.png';
  
  // Creamos un array de productos para recorrerlo en el template
  const products = [
    { image: reparaciones, alt: 'Reparación Imagen', title: 'Reparaciones' },
    { image: complementos, alt: 'Complementos Imagen', title: 'Complementos' },
    { image: mobiles_tablet, alt: 'Móviles y Tablets Imagen', title: 'Móviles y Tablets' },
    { image: tarifa_fibra, alt: 'Tarifa de Fibra Imagen', title: 'Tarifa de Fibra y móvil' },
    { image: ordenadores, alt: 'Ordenadores Imagen', title: 'Ordenadores' },
  ];
  </script>
  
  <style scoped>
  .container-image {
    width: 80px;
    height: 80px;
  }
  
  .title-img {
    font-size: 16px;
    color: #005346;
  }
  


  .max-width {
    max-width: 1250px;
  }
  .row-productos{
    padding: 3rem 0;
  }
  </style>
  