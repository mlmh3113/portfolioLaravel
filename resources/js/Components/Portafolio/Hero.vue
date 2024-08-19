<template>
    <div class="flex flex-row w-screen mx-auto pb-5" id="hero" :class="isDark ? 'dark bg-slate-900' : 'bg-slate-300 text-black'">
        <div class="max-w-96 flex flex-col items-center justify-center gap-9 m-aut w-5/6 min-h-screen pt-20 md:flex-row-reverse 
        mx-auto ">
            <img class="rounded-full w-60 h-60" src="https://res.cloudinary.com/dkoocayxp/image/upload/v1724087866/portfolio/perfil_martin_2_2_g6o4tf.jpg" alt="perfil" loading="lazy" width="200">

            <div>
                <p class="text-5xl font-bold " :class="isDark ? 'text-slate-300' : 'text-slate-700'">
                    Hola, Soy Martín
                </p>
                <h2 class="text-5xl font-bold text-sky-500">
                    desarrollador Full Stack
                </h2>


                <div class="flex gap-3 mt-2 ">
                    <a class="inline-block rounded bg-gradient-to-r from-green-400 to-blue-500 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500"
                        href="./MartinezMartinLeandroCV.pdf" download="MartinezMartinLeandroCV.pdf">
                        Curriculum ↓
                    </a>
                    <a class="inline-block rounded bg-gradient-to-r from-green-400 to-blue-500 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500"
                        href="#portfolio">
                        Proyectos
                    </a>
                </div>

            </div>
        </div>

    </div>
</template>

<script setup>
import { computed } from 'vue';

const emit = defineEmits([
    'darkMode'
])

const props = defineProps({
    dark: {
        type: Boolean
    }
})

const isDark = computed(() => {
    return props.dark;
})


</script>

<style  scoped></style>
