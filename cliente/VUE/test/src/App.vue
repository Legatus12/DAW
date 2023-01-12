<template>
 <div>
  <header>
    <NavBar titulo="Menú Principal" :links="[{ name: 'Inicio' }, { name: 'Sobre Nosotros' }, { name: 'SubMenu' }, { name: 'Signup' }, ]"/>
  </header>
  <main>
    <RouterView />
  </main>
 </div>
</template>


<script setup>

import { RouterView } from "vue-router";
import { onBeforeUnmount } from "vue";
import { borraLocalStorage } from "@/shared/LocalStorage/LocalStorage";

import NavBar from "@/elementos/components/NavBar.vue";

//

onBeforeUnmount(() => {
  borraLocalStorage("permitido")
  console.log("Nos vamos")
});

</script>


<style scoped>

</style>
