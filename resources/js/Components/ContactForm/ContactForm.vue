<template>
    <div class="container">
        <h1 class="mb-5 title-contacta">Contacta con nosotros</h1>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <input
                            type="text"
                            v-model="form.full_name"
                            placeholder="Nombre completo"
                            class="form-control"
                        />
                        <span v-if="form.errors.full_name" class="text-danger">{{ form.errors.full_name[0] }}</span>
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            v-model="form.phone"
                            placeholder="Teléfono"
                            class="form-control"
                        />
                        <span v-if="form.errors.phone" class="text-danger">{{ form.errors.phone[0] }}</span>
                    </div>
                    <div class="form-group">
                        <input
                            type="email"
                            v-model="form.email"
                            placeholder="Correo electrónico"
                            class="form-control"
                        />
                        <span v-if="form.errors.email" class="text-danger">{{ form.errors.email[0] }}</span>
                    </div>
                    <div class="form-group">
                        <textarea
                            v-model="form.message"
                            placeholder="Asunto o escribe tu mensaje"
                            class="form-control resize-none"
                            rows="3"
                        ></textarea>
                        <span v-if="form.errors.message" class="text-danger">{{ form.errors.message[0] }}</span>
                    </div>
                    <button type="submit" class="btn btn-public">Enviar</button>
                </form>
                <!-- Mensajes de éxito y error -->
                <div v-if="successMessage" class="alert alert-success mt-3" role="alert">{{ successMessage }}</div>
                <div v-if="errorMessage" class="alert alert-danger mt-3" role="alert">{{ errorMessage }}</div>
            </div>
            <div class="col-md-6">
                <div class="info-map">
                    <a href="mailto:
contacto@linotec.net" class="text-decoration-none">
                        <i class="bi bi-envelope-fill"></i>
                        contacto@linotec.net
                    </a>
                    <a href="tel:+1234567890" class="text-decoration-none">
                        <i class="bi bi-telephone-fill"></i>
                        <span>607 514 650</span>
                    </a>
                    <a href="tel:+1234567890" class="text-decoration-none">
                        <i class="bi bi-geo-alt-fill"></i> Cajo 1 Santander, Cantabria
                    </a>
                </div>
                <div id="map" class="border-radius" style="height: 500px;"></div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";
import Swal from "sweetalert2";
import L from "leaflet"; // Importación correcta de Leaflet

const successMessage = ref("");
const errorMessage = ref("");
const form = useForm({
    full_name: "",
    phone: "",
    email: "",
    message: "",
});

const initMap = () => {
    // Inicializar el mapa en la ubicación y zoom deseados sin el control de zoom predeterminado
    const map = L.map("map", { zoomControl: false }).setView([37.7749, -122.4194], 13); // Coordenadas de ejemplo

    // Agregar el mapa oscuro de Stadia
    var Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.{ext}', {
        minZoom: 0,
        maxZoom: 20,
        ext: 'png'
    });

    // Agregar la capa de mapa oscuro al mapa
    Stadia_AlidadeSmoothDark.addTo(map);

    // Agregar el marcador en la misma ubicación
    const marker = L.marker([37.7749, -122.4194]).addTo(map);
    marker.bindPopup('<b>Linotec</b><br>Santander.').openPopup();

    // Crear controles de zoom y colocarlos en la parte inferior derecha del mapa
    const zoomControl = L.control.zoom({
        position: 'bottomright' // Cambiar a 'bottomright' para posicionar el control de zoom
    });

    zoomControl.addTo(map); // Agregar el control al mapa
};




const submit = () => {
    successMessage.value = ""; // Limpiar mensajes previos
    errorMessage.value = "";

    Swal.fire({
        title: "Enviando...",
        html: "Estamos procesando tu mensaje. Por favor, espera un momento.",
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        },
    });

    form.post(route("contact.store"), {
        onSuccess: () => {
            setTimeout(() => {
                Swal.fire({
                    icon: "success",
                    title: "¡Éxito!",
                    text: "Tu mensaje ha sido enviado con éxito!",
                    confirmButtonText: "Aceptar",
                    willClose: () => {
                        form.reset();
                        location.reload();
                    },
                });
            }, 1500);
        },
        onError: () => {
            setTimeout(() => {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Ocurrió un error al enviar el mensaje. Por favor, intenta nuevamente.",
                    confirmButtonText: "Aceptar",
                });
            }, 1500);
        },
    });
};

onMounted(() => {
    initMap();
});
</script>

<style scoped>
.form-group {
    margin-bottom: 15px;
}
.form-control {
    width: 100%;
    padding: 15px;
    border-radius: 4px;
    border: 1px solid #ccc;
    font-family: var(--kanit);
}
.form-control::placeholder {
    font-size: 15px;
    color: rgba(0, 0, 0, 0.5);
}
.icon {
    font-size: 1.1rem;
}



.info-map {
    position: absolute;
    background-color: red;
    z-index: 500;
    display: flex;
    flex-direction: column;
    margin: 1rem;
    gap: .6rem;
}

/* Personalizar los controles de zoom */
.leaflet-control-zoom {
    background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con opacidad */
    border-radius: 5px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra */
    padding: 5px; /* Espaciado */
}

/* Cambiar el color de los iconos de zoom */
.leaflet-control-zoom .leaflet-control-zoom-in,
.leaflet-control-zoom .leaflet-control-zoom-out {
    color: green; /* Cambiar color a verde */
    font-size: 20px; /* Ajustar el tamaño del texto */
}

.leaflet-control-container{
    display: none !important;
}


.info-map {
    background-color: rgba(0, 162, 155, .7);
    padding: 1rem;
    border-radius: var(--border-radius);
}

.info-map a {
    color: var(--white);
    display: flex;
    gap: .5rem;
    font-size: 15px;
}

.resize-none {
    resize: none;
}

.title-contacta {
    display: inline-block;
}
.title-contacta::after{
    content: "";
    height: .6rem;
    width: 100%;
    background-color: #84D9BC;
    display: block;
    margin: -1rem 0 0 0;
}
</style>
