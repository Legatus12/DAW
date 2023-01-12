<script setup>
import { useRoute } from 'vue-router';
const route = useRoute();
console.log(route.fullPath);
console.log(route.nombre);
</script>

<template>
    <div>
        <h1>Usuario: {{ route.params.nombre }}</h1>
    </div>
</template>


<style scoped>

</style>