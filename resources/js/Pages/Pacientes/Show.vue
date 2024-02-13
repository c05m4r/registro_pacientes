<template>
    <div class="container px-5 py-5 mx-auto">
        <Link href="/pacientes/" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancelar</Link>
        <div class="flex justify-center">
            <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">{{ paciente.apellido }}, {{ paciente.nombre }}</h5>
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        DNI
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ paciente.dni }}
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Correo
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ paciente.email }}
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Médico solicitante
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ paciente.medico_solicitante }}
                                </div>
                            </div>
                        </li>
                        <li class="pt-3 pb-0 sm:pt-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Obra social
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ paciente.obra_social }}
                                </div>
                            </div>
                        </li>
                        <li class="pt-3 pb-0 sm:pt-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Estudio
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ paciente.estudio }}
                                </div>
                            </div>
                        </li>
                        <li class="pt-3 pb-0 sm:pt-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Costo impresión
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ paciente.costo_impresion }}
                                </div>
                            </div>
                        </li>
                        <li class="pt-3 pb-0 sm:pt-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Fecha de alta
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ paciente.created_at.slice(0,10) }}
                                </div>
                            </div>
                        </li>
                        <li class="pt-3 pb-0 sm:pt-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Fecha de actualización
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ paciente.updated_at.slice(0,10) }}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>   
    </div>
</template>

<script>
import { Link} from '@inertiajs/vue3'
    
export default {
    components: {
        Link
    },
    props: {
        paciente: Array
    }
}
</script>