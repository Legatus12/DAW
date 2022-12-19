<template>
    <button @click="open = true">Edición</button>
    <Teleport to="body">
      <div v-if="open" class="modal">
        <h2>Cambia el valor</h2>
        <input type="text" v-model="inicial">
        <button @click="cerrar">Close</button>
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

const cerrar =() => {
    open.value = false
    emits("alCerrar", [inicial.value, props.valor[1]])
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