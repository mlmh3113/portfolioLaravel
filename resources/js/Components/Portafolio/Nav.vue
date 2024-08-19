<template>
    <header class="shadow fixed z-50 border-b px-6 top-0 left-0 right-0 items-center " :class="isDark ? 'dark bg-[rgb(20,24,24)]' : 'bg-slate-200 text-black'">

            <div class="flex after:-mr-4 justify-center flex-wrap">
       
                <div class="space-x-8 ml-8 hidden md:flex">
                    <a href="#hero" class=" px-3 py-2 hover:text-sky-500 transition-colors">Inicio</a>
                    <a href="#about" class=" px-3 py-2 hover:text-sky-500 transition-colors">Sobre mi</a>
                    <a href="#portfolio" class=" px-3 py-2 hover:text-sky-500 transition-colors">Proyectos</a>
                    <a href="#contact" class=" px-3 py-2 hover:text-sky-500 transition-colors">Contacto</a>

                    <button @click='$emit("darkMode")'
                    class=" rounded-full  text-slate-500 hover:text-sky-500 transition-colors ">
                    <svg class="h-6 w-6" data-slot="icon" fill="currentColor" :viewBox="isDark ? '0 0 16 16' : '0 0 24 24'"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path
                            :d='isDark ? "M8 1a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 8 1ZM10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM12.95 4.11a.75.75 0 1 0-1.06-1.06l-1.062 1.06a.75.75 0 0 0 1.061 1.062l1.06-1.061ZM15 8a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 15 8ZM11.89 12.95a.75.75 0 0 0 1.06-1.06l-1.06-1.062a.75.75 0 0 0-1.062 1.061l1.061 1.06ZM8 12a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 8 12ZM5.172 11.89a.75.75 0 0 0-1.061-1.062L3.05 11.89a.75.75 0 1 0 1.06 1.06l1.06-1.06ZM4 8a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 4 8ZM4.11 5.172A.75.75 0 0 0 5.173 4.11L4.11 3.05a.75.75 0 1 0-1.06 1.06l1.06 1.06Z":
                            "M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"'/>
                    </svg>
                </button>
                </div>

                <div class="space-x-8 flex flex-col md:hidden w-screen pt-1">
                    <div class="flex flex-row-reverse gap-3 ">
                <button  @click="toggleMenu"
                    class=" rounded-full  text-slate-500 hover:text-sky-500 transition-colors ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                    <button @click='$emit("darkMode")'
                    class=" rounded-full text-slate-500 hover:text-sky-500 transition-colors ">
                    <svg class="h-6 w-6" data-slot="icon" fill="currentColor" :viewBox="isDark ? '0 0 16 16' : '0 0 24 24'"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path
                            :d='isDark ? "M8 1a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 8 1ZM10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM12.95 4.11a.75.75 0 1 0-1.06-1.06l-1.062 1.06a.75.75 0 0 0 1.061 1.062l1.06-1.061ZM15 8a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 15 8ZM11.89 12.95a.75.75 0 0 0 1.06-1.06l-1.06-1.062a.75.75 0 0 0-1.062 1.061l1.061 1.06ZM8 12a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 8 12ZM5.172 11.89a.75.75 0 0 0-1.061-1.062L3.05 11.89a.75.75 0 1 0 1.06 1.06l1.06-1.06ZM4 8a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 4 8ZM4.11 5.172A.75.75 0 0 0 5.173 4.11L4.11 3.05a.75.75 0 1 0-1.06 1.06l1.06 1.06Z":
                            "M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"'/>
                    </svg>
                </button>
               
                    </div>
                    <div  class="flex flex-col gap-3 my-2">
                          <ul  :class="toggle ? 'hidden':''">
                        <li class="py-3" @click="toggleMenu"><a href="#hero"  class=" px-3  hover:text-sky-500 transition-colors">Inicio</a></li>
                        <li class="py-3" @click="toggleMenu"><a href="#about" class=" px-3  hover:text-sky-500 transition-colors">Sobre mi</a></li>
                        <li class="py-3" @click="toggleMenu"><a href="#portfolio" class=" px-3  hover:text-sky-500 transition-colors">Proyectos</a></li>
                        <li class="py-3" @click="toggleMenu"><a href="#contact" class=" px-3  hover:text-sky-500 transition-colors">Contacto</a></li>
                    </ul>
                    </div>
                  
                </div>
            </div>
    </header>
</template>

<script setup>
import { ref , computed } from 'vue';

const emit = defineEmits([
    'darkMode'
])

const props = defineProps({
    dark:{
        type : Boolean
    }
})

const isDark = computed(() => {
    return props.dark;
})

const toggle = ref(true)

const toggleMenu  = () => {
    toggle.value = !toggle.value
    return console.log(toggle.value);
}

</script>

<style scoped >

header{
    border-bottom: solid 1px #b4b4b4;
}

</style>