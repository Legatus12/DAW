<template>
  <form id="myForm" @submit.prevent="addCity()">
    <select v-model="text">
      <option v-for="city in cities.list">{{ city }}</option>
    </select>
    <h2>{{ text }}</h2>
    <input v-model="input">
  </form>
</template>


<script setup>

import { ref, onMounted } from 'vue'
import { useStore } from '@/stores/cities.js'
import axios from 'axios'

//

const server = 'http://localhost:3000/cities'

const cities = useStore()

//

const text = ref('')

const input = ref('')

onMounted(async() => {
  const response = await axios.get(server)
  response.data.map(city => cities.add(city.name))
})

const addCity = () => {
  input.value == '' 
        ? alert('el input está vacío') 
        : cities.add(input.value); axios.post(server, { name: input.value }); input.value = ''
}

</script>


<style scoped></style>