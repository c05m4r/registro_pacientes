<template>
    <div class="container px-5 py-5 mx-auto">
        <Link href="/pacientes/" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancelar</Link>
    </div>
    <form @submit.prevent="submit()" class="max-w-md mx-auto">
    <div class="mb-5">
        <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
        <input type="apellido" v-model="form.apellido" id="apellido" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-5">
        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
        <input type="nombre" v-model="form.nombre" id="nombre" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-5">
        <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
        <input type="dni" v-model="form.dni" id="dni" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
        <input type="email" v-model="form.email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="nombre@dominio.com" required>
    </div>
    <div class="mb-5">
        <label for="medico_solicitante" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Médico</label>
        <input type="medico_solicitante" v-model="form.medico_solicitante" id="medico_solicitante" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-5">
        <label for="obra_social" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obra social</label>
        <input type="obra_social" v-model="form.obra_social" id="obra_social" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-5">
        <label for="tecnico" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Técnico</label>
        <input type="tecnico" v-model="form.tecnico" id="tecnico" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-5">
        <label for="costo_impresion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Costo</label>
        <input type="costo_impresion" v-model="form.costo_impresion" id="costo_impresion" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-5">
        <label for="estudio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estudio</label>
        <input type="estudio" v-model="form.estudio" id="estudio" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-5">
        <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
        <select v-model="form.categoria" id="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="radiologia">Radiología</option>
            <option value="mamografia">Mamografía</option>
            <option value="densitometria">Densitometría</option>
        </select>
    </div>
    <div class="flex justify-center space-x-2">
        <div>    
            <label class="relative inline-flex items-center mb-5 cursor-pointer">
                <input id="estado_envio" type="checkbox" value="0" v-model="form.estado_envio" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enviado</span>
            </label>
        </div>
        <div>
            <label class="relative inline-flex items-center mb-5 cursor-pointer">
                <input id="estado_informe" type="checkbox" value="0" class="sr-only peer" v-model="form.estado_informe">
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Informado</span>
            </label>
        </div>
    </div>
    <div class="flex justify-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
    </div>
    </form>
</template>

<script>
import { Link, Head} from '@inertiajs/vue3'

export default {
    components: {
        Head,
        Link
    },
    props: {
        paciente: Object,
    },
    remember: 'form',
    data() {
        return {
            form: this.$inertia.form({
                id: null,
                dni: null,
                nombre: null,
                apellido: null,
                email: null,
                medico_solicitante: null,
                estudio: null,
                obra_social: null,
                tecnico: null,
                categoria: null,
                costo_impresion: null,
                estado_informe: 0,
                estado_envio: 0
        }),
        }
    },
    methods: {
        submit(){
            this.form.post('/pacientes');
        }
    }
}
</script>