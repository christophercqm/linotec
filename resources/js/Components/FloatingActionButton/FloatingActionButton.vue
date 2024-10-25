<template>
    <div class="whatsapp-button">
        <a :href="whatsappUrl" target="_blank" class="whatsapp-icon">
            <img :src="whatsapp_icon" alt="WhatsApp" class="img-fluid" />
        </a>
        <div class="circle">
            <svg
                class="e-font-icon-svg e-fas-chevron-up arrow-personal"
                fill="currentColor"
                viewBox="0 0 448 512"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"
                ></path>
            </svg>
        </div>
    </div>
</template>

<script setup>
import whatsapp_icon from "@images/whatsapp-icon.png";

const whatsappNumber = "+34607514650"; // Reemplaza con el número de WhatsApp deseado
const whatsappMessage = "¡Hola! Estoy interesado en obtener más información."; // Mensaje predeterminado
const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
    whatsappMessage
)}`;
</script>

<style scoped>
.whatsapp-button {
    position: fixed;
    bottom: 20px; /* Ajusta la posición según tus necesidades */
    right: 20px; /* Ajusta la posición según tus necesidades */
    z-index: 1000;
}

.whatsapp-icon {
    display: inline-block;
    background-color: #25d366; /* Color de fondo de WhatsApp */
    border-radius: 50%; /* Círculo */
    padding: 10px; /* Espaciado alrededor del icono */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    width: 50px;
    height: 50px;
}

.circle {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 50px; /* Ajusta el tamaño del círculo */
    height: 50px; /* Ajusta el tamaño del círculo */
    border: 2px solid white; /* Color del borde */
    border-radius: 50%; /* Círculo */
    margin-top: 10px; /* Espacio entre el icono de WhatsApp y el círculo */
    padding: .7rem;
    fill: white;
    transition: .5s ease-in-out;
    color: white;
}

.circle:hover{
  background-color: white;
  color: #00A29B;
}




</style>
