<template>
  <div class="w-full h-full flex justify-around items-center bg-[#d6d6d6]">
    <List :users="users"/>
    <Signup @signed-up="updateUsers"/>
  </div>
</template>


<script setup>

import Signup from './components/Signup.vue';
import List from './components/List.vue';
import axios from 'axios';
import { ref, onMounted } from 'vue';

onMounted(async() => {
  try{
    const res = await axios.get(`http://localhost:3000/users/`);
    users.value = res.data;
  } catch(error){
      console.log(error);
  }
})

const users = ref([]);

const updateUsers = (user) => {
  users.value.push(user);
}

</script>


<style lang="scss" scoped>

</style>