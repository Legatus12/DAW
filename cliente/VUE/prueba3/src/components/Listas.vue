<template>
    <ul>
        <li v-for="item in lista1">{{ item }}</li>
    </ul>
</template>

<script>
    export default {
        props:{
            lista1: Array,
        }
    }
</script>

<style scoped>

</style>