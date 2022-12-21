<template>
    <button @click="open = true">Borrar</button>
    <Teleport to="body">
  <div v-if="open" class="modal">
    <h2>¿Quieres borrar a {{ valor[0] }}</h2>
    <button @click="borrar">Borrar</button>
    <button @click="cancelar">Cancelar</button>
  </div>
</Teleport>
</template>
  

<script setup>

import { ref } from 'vue'

const props = defineProps(
    {valor: {
        type:Array,     
    }
})
const emits = defineEmits(["alCerrar"])
const inicial = ref(props.valor[0])
const open = ref(false)

const borrar =() => {
    open.value = false
    emits("alCerrar", [true, props.valor[1]])
}
const cancelar =() => {
    open.value = false
    emits("alCerrar", [false, false])
}

</script>


<style scoped>
.modal {
    position: fixed;
  z-index: 999;
  top: 20%;
  left: 50%;
  width: 300px;
  margin-left: -150px;
}
</style>