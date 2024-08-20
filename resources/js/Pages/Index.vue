<template>

    <Head title="Martin Leandro Martinez" />
    <Nav @darkMode="darkMode" :dark="dark"></Nav>
    <Hero :dark="dark"></Hero>
    <About :cursos="cursos" :dark="dark"></About>
    <Portafolio :proyectos="proyectos" :dark="dark"></Portafolio>
    <Contact :dark="dark"></Contact>
    <Footer :dark="dark"></Footer>

</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Portafolio/Nav.vue';
import Hero from '@/Components/Portafolio/Hero.vue';
import About from '@/Components/Portafolio/About.vue';
import Portafolio from '@/Components/Portafolio/Portafolio.vue';
import Contact from '@/Components/Portafolio/Contact.vue';
import Footer from '@/Components/Portafolio/Footer.vue';

defineProps({
    cursos: Object,
    proyectos: Object
})

import { ref } from 'vue';


const dark = ref(true)


const darkMode = () => {
    dark.value = !dark.value
}



</script>

<style>
body {
    font-family: 'Onest', sans-serif;
    color: black;
    font-size: larger;

}

html {
    scroll-behavior: smooth;
    scroll-padding-top: 80px;
}

.dark {
    color: aliceblue;
}
</style>
