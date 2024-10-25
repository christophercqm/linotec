<template>
    <div class="container-fliping-card container-padding">
      <div class="container">
        <div class="col">
          <div class="row text-center py-5">
            <h2 class="title-servicios">Nuestros servicios</h2>
            <div class="col-12 d-flex justify-content-center flex-wrap">
              <!-- Generar tarjetas dinámicamente -->
              <div
                class="card-container"
                v-for="(card, index) in cardsData"
                :key="index"
                @mouseover="hoverCard(index)"
                @mouseleave="resetHover(index)"
              >
                <div class="flipping-card" :class="{ flipped: isHovered[index] }">
                  <div
                    class="card front"
                    :style="{ backgroundImage: `url(${card.image})` }"
                  >
                    <div class="overlay"></div>
                    <h3 class="title-card">{{ card.title }}</h3>
                  </div>
                  <div class="card back b">
                    <span class="mb-3">{{ card.description }}</span>
                    <button class="btn-view">Contactar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import flip_1 from "@images/flip_card/flip-1.png";
  import flip_2 from "@images/flip_card/flip-2.png";
  import flip_3 from "@images/flip_card/flip-3.png";
  
  // Objeto que contiene las imágenes y textos
  const cardsData = [
    {
      image: flip_1,
      title: "La mejor FIBRA",
      description: "Descripción para la mejor FIBRA. Contacta para más detalles."
    },
    {
      image: flip_2,
      title: "Servicio Premium",
      description: "Descripción para el servicio premium. ¡No te lo pierdas!"
    },
    {
      image: flip_3,
      title: "Asistencia 24/7",
      description: "Descripción sobre nuestra asistencia 24/7. Siempre aquí para ayudarte."
    }
  ];
  
  const isHovered = ref([false, false, false]); // Estado de hover para cada tarjeta
  
  // Manejar el hover en una tarjeta específica
  const hoverCard = (index) => {
    isHovered.value[index] = true;
  };
  
  // Restablecer el hover
  const resetHover = (index) => {
    isHovered.value[index] = false;
  };
  </script>
  
  <style scoped>
  .container-padding {
    padding-top: 30px;
    padding-bottom: 30px;
  }
  
  /* Estilo del contenedor de la tarjeta */
  .card-container {
    perspective: 1000px; /* Para dar efecto de profundidad al girar */
    margin: 10px; /* Espacio entre tarjetas */
  }
  
  /* Estilo para la tarjeta que gira */
  .flipping-card {
    width: 300px; 
    height: 200px; 
    position: relative;
    transform-style: preserve-3d; /* Mantener el espacio 3D */
    transition: transform 0.6s; /* Transición suave al girar */
  }
  
  .flipping-card.flipped {
    transform: rotateY(180deg); /* Girar 180 grados */
  }
  
  /* Estilos para las partes frontal y trasera de la tarjeta */
  .card {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden; /* Ocultar la parte trasera cuando no está girada */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 5px; /* Asegúrate que sea igual en .overlay */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    color: #fff; /* Color del texto */
    text-align: center;
    background-size: cover; /* Ajustar la imagen de fondo */
    background-position: center; /* Centrar la imagen de fondo */
  }
  
  /* Capa de opacidad sobre la imagen */
  .overlay {
    position: absolute;
    left: 0;
    right: 0;
    top: 0; /* Asegúrate de que cubra desde la parte superior */
    bottom: 0; /* Asegúrate de que cubra hasta la parte inferior */
    background-color: rgba(0, 83, 70, 0.8); /* Color #005346 con 50% de opacidad */
    mix-blend-mode: multiply; /* Modo de mezcla */
    border-radius: 5px; /* Bordes redondeados igual que la tarjeta */
    z-index: 1; /* Asegura que esté sobre la imagen */
    box-sizing: border-box; /* Incluye el padding y el border en el tamaño */
  }
  
  /* La parte trasera de la tarjeta */
  .card.back {
    transform: rotateY(180deg); /* La parte trasera inicia girada */
    background-color: #3b5998; /* Color de fondo de la parte trasera */
  }
  
  /* Estilo del botón */
  .btn-view {
    background-color: #fff; /* Color del botón */
    color: #005346; /* Color del texto del botón */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    position: relative; /* Para posicionar sobre la superposición */
    z-index: 2; /* Asegura que el botón esté sobre la superposición */
  }
  
  .btn-view:hover {
    background-color: #f0f0f0; /* Efecto hover en el botón */
  }

  .title-card {
    z-index: 2;
  }
  </style>
  