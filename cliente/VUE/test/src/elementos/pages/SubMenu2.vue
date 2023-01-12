<script setup>
import { escribeLocalStorage, borraLocalStorage } from "@/shared/LocalStorage/LocalStorage";
</script>

<template>
    <div>
        <h1>SubMenu2</h1>
        <button @click="escribeLocalStorage('permitido', 'Sí')">Permite</button>
        <button @click="escribeLocalStorage('permitido', 'No')">No Permite</button>
        <button @click="borraLocalStorage('permitido')">Borra la clave</button>       
    </div>
</template>

<style  scoped>

</style>