<template>
  <div class="outer">
    <h3>Vue Teleport Example</h3>
    <ul>
      <li v-for="(el, key) in lista" :key="key"> {{ el }}
        <MyModal :valor="[el,key]" @alCerrar="cambio" />
        <MyModal2 :valor="[el,key]" @alCerrar="eliminar" />
        </li>

    </ul>
    <ul>
      <li v-for="(el, key) in lista" :key="key"> {{ el }}
        
        </li>

    </ul>
  </div>
</template>

<script setup>
import MyModal from "@/components/MyModal.vue";
import MyModal2 from "@/components/MyModal2.vue";
import { ref, computed } from "vue";
const lista = ref([1,2,3,4]);
const cambio =(dato)=>{
    lista.value[dato[1]]=dato[0]
    console.log(lista.value)
}
const eliminar =(dato) => { 
  if (dato[0]) lista.value.splice(dato[1],1)

}

</script>


<style lang="scss" scoped>

</style>