<template>
    <Head title="Martin Leandro Martinez" />
    <Nav></Nav>
    <Hero></Hero>
    <About :cursos="cursos"></About>
    <Portafolio :proyectos="proyectos"></Portafolio>
    <Contact></Contact>
    <Footer></Footer>
    
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


</script>

