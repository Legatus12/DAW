<template>
    <span>{{props.titulo}}</span>
    <nav>
        <RouterLink
         v-for="enlace in props.links"
         :key="enlace"
         :to="{ name: enlace.name }">
            {{ enlace.name }}
        </RouterLink>
        
    </nav>

</template>


<script setup>

import { RouterLink } from 'vue-router';

//

const props = defineProps({
    "titulo": String,
    "links": Array,
})

</script>


<style scoped>
nav {
    width: 100%;
    font-size: 12px;
    text-align: center;
    margin-top: 10px;
    margin-right: 150px;
    display: flex;
    align-items: flex-start;

}
a { 
    margin-right: 5px;
   }
.router-link-active {
    color: gray !important

}   
.router-link-exact-active {
    color:red 

}
</style>