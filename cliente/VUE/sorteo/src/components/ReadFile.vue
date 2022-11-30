<template>
    <label >
      {{ texto }} 
      <input type="file" @change="loadTextFromFile">
    </label>       
</template>
  
<script setup>

const props = defineProps({
  texto: String
})

const emits = defineEmits(["carga"])

function loadTextFromFile(ev){
  const file = ev.target.files[0];
  const reader = new FileReader();
  reader.onload = e => emits("carga",e.target.result);
  reader.readAsText(file);
}  

</script>

<style></style>