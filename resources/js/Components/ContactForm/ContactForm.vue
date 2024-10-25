<template>
    <div class="container">
        <h1 class="mb-4">Contacta con nosotros</h1>
        
        <div class="row">
            <!-- Columna para el formulario -->
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
                            class="form-control"
                        ></textarea>
                        <span v-if="form.errors.message" class="text-danger">{{ form.errors.message[0] }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                
                <div v-if="successMessage" class="alert alert-success mt-3">
                    {{ successMessage }}
                </div>
            </div>

            <!-- Columna para información -->
            <div class="col-md-6">
                <h2>Información de contacto</h2>
                <p>Si tienes alguna duda, no dudes en contactarnos. Estamos aquí para ayudarte.</p>
                <p><strong>Email:</strong> info@tusitio.com</p>
                <p><strong>Teléfono:</strong> +123 456 7890</p>
                <p><strong>Dirección:</strong> Calle Ejemplo 123, Ciudad, País</p>
                <p>También puedes seguirnos en nuestras redes sociales.</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'; 
import { ref } from 'vue';

const form = useForm({
    full_name: '',
    phone: '',
    email: '',
    message: '',
});

// Variable para el mensaje de éxito
const successMessage = ref('');

// Método para enviar el formulario
const submit = () => {
    form.post('/contact', {
        onSuccess: () => {
            // Limpia el formulario y establece el mensaje de éxito
            form.reset();
            successMessage.value = "Tu mensaje ha sido enviado con éxito!";
        },
        onError: (errors) => {
            console.log(errors);
        }
    });
};
</script>

<style scoped>
.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.text-danger {
    font-size: 12px;
}

.btn {
    margin-top: 10px;
}
</style>
