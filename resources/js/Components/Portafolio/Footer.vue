<template>
    <div id="footer" class="flex flex-row justify-center py-5 h-full" :class="isDark ? 'dark bg-slate-900 border-t-white' : ' bg-slate-300'">
        <div>
            <a href="" class="hover:text-sky-500">Martín Leandro Martinez 👋</a>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue';

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

</script>

<style scoped>

</style>