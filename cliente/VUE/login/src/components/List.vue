<template>
    <div>
        <h1>usuarios registrados: </h1>
        <br><br>
        <ul>
            <li v-for="user in users">{{ user.user }} <b>({{ user.id }})</b></li>
        </ul>
    </div>
</template>


<script setup>

const props = defineProps({
    users: Array
})

</script>


<style scoped>

</style>