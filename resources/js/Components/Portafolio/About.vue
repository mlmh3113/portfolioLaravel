<template>



    <div id="about" class="min-h-screen md:scroll-mt-10"
        :class="isDark ? 'dark bg-gradient-to-br from-gray-800 via-gray-900 to-indigo-950 h-full' : 'bg-slate-200 text-black'">
        <div class="flex flex-col gap-9 items-center w-5/6 mx-auto py-5">
            <div class="py-3">
                <h3 class="text-5xl font-bold my-2" :class="isDark ? 'dark text-slate-300' : 'text-slate-700'">Sobre mi.
                </h3>
                <p class=" text-pretty">
                    Después de trabajar más de 15 años en el sector financiero, decidí explorar mi fascinación por la
                    tecnología y embarcarme en la programación. Ahora me encuentro inmerso en la creación de APIs con
                    Python, Vue y en la gestión de bases de datos con SQL. Esta dualidad de experiencia me ha brindado una
                    perspectiva única, permitiéndome abordar proyectos de manera integral.<br>
                    Estoy emocionado por seguir creciendo, explorando nuevas posibilidades y mejorando mis habilidades.
                </p>
            </div>

            <div class="flex flex-col md:flex-row py-5">
                <div class="py-5">
                    <h3 class="my-2 font-bold text-2xl">Educacion</h3>
                    <ul class="list-disc flex flex-wrap gap-5 flex-row">
                        <li v-for="curso in cursos" class="ml-5 text-xl font-bold">
                            {{ curso.nombre }}
                            <span class="text-base block text-gray-500">{{ curso.institucion }}
                                <span class="block text-gray-500">{{ curso.anio }}</span>
                            </span>
                        </li>

                    </ul>
                </div>



                <div class="py-5">
                    <h3 class="my-2 font-bold text-2xl">Tecnologias</h3>
                    <div class="flex flex-wrap gap-6 items-center ">



                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/laravel.svg" alt="laravel">
                            <p class="text-base block text-gray-500 text-center font-bold">Laravel</p>
                        </div>


                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/python.svg" alt="python">
                            <p class="text-base block text-gray-500 text-center font-bold">Python</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/javascript.svg" alt="Javascript">
                            <p class="text-base block text-gray-500 text-center font-bold">Javascript</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/php.svg" alt="Javascript">
                            <p class="text-base block text-gray-500 text-center font-bold">PHP</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/sql.svg" alt="SQL">
                            <p class="text-base block text-gray-500 text-center font-bold">SQL</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/vue.svg" alt="vue">
                            <p class="text-base block text-gray-500 text-center font-bold">Vue</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/tailwind.svg" alt="tailwind">
                            <p class="text-base block text-gray-500 text-center font-bold">Tailwind</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/git.svg" alt="git">
                            <p class="text-base block text-gray-500 text-center font-bold">Git</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-12 h-12" src="@/images/icons/github.svg" alt="github">
                            <p class="text-base block text-gray-500 text-center font-bold">GitHub</p>
                        </div>


                    </div>

                </div>


            </div>


        </div>

    </div>
</template>

<script setup>
import { ref, computed } from 'vue';






const emit = defineEmits([
    'darkMode'
])

const props = defineProps({
    dark: {
        type: Boolean
    },
    cursos: {
        type: Object
    }
})

const isDark = computed(() => {
    return props.dark;
})

</script>

<style scoped></style>