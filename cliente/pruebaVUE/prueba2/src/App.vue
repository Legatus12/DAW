<script setup>
import Component1 from './components/Component1.vue';
import Component2 from './components/Component2.vue';

</script>

<template>
  <div id="container">
    <Component1 />
    <Component2 />
  </div>
</template>

<style scoped>

  #container{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 50px;
    color: white;
  }

</style>
