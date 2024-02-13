<template>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
            <Link href="/pacientes/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</Link>
        </div>
        <div class="container px-5 mx-auto">
            <div class="rounded-lg border border-gray-200">
                <div class="overflow-x-auto rounded-t-lg">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 ">IGM</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nombre</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Categoría</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Informado</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Enviado</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Fecha</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr v-for="paciente in pacientes" :key="paciente.id">
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700 flex justify-center">{{ paciente.usuario_igm }}</td>
                        <td class="whitespace-nowrap py-2 text-gray-700">{{ paciente.apellido }}, {{ paciente.nombre }}</td>
                        <td class="whitespace-nowrap py-2 text-gray-700 flex justify-center">{{ paciente.categoria }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                            <div class="flex justify-center">
                                <div v-if="paciente.estado_informe">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div v-else="paciente.estado_informe">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <div v-if="paciente.estado_envio">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div v-else="paciente.estado_envio">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class=" whitespace-nowrap px-4 py-2 text-gray-700 flex justify-center">{{ paciente.created_at.slice(0,10) }}</td>
                        <td>
                            <div class="flex justify-center space-x-3">
                                <button @click="verPaciente(paciente.id)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </button>
                                <button @click="editarPaciente(paciente.id)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                </button>
                                <button @click="eliminarPaciente(paciente.id)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
            <ol class="flex justify-end gap-1 text-xs font-medium">
            <li>
                <a
                href="#"
                class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
                >
                <span class="sr-only">Prev Page</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3 w-3"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                    fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                    />
                </svg>
                </a>
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
                >
                1
                </a>
            </li>

            <li class="block size-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white">
                2
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
                >
                3
                </a>
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
                >
                4
                </a>
            </li>

            <li>
                <a
                href="#"
                class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
                >
                <span class="sr-only">Next Page</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3 w-3"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                    />
                </svg>
                </a>
            </li>
            </ol>
            </div>
            </div>
        </div>
    </section>
</template>

<script>
import { Link, Head } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'

export default {
    components: {
        Head,
        Link
    },
    props: {
        pacientes: Object,
    },
    methods: {
        eliminarPaciente(id){
            router.delete(`/pacientes/${id}`)
        },
        editarPaciente(id){
            router.get(`/pacientes/${id}/edit`)
        },
        verPaciente(id){
            router.get(`/pacientes/${id}`)
        }   
    }
}
</script>