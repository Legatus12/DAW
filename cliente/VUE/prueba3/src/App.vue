<script>
  //import Saludo from './components/Saludo.vue'
  import Listas from './components/Listas.vue'

  export default{
    components:{
      Listas
    },
    data(){
      return{
        meses: ["enero", "febrero", "marzo"]
      }
    }
  }
</script>

<template>
  <!--<Saludo prop1="Soy un prop de un otro componente" prop2="Yo también"/>-->
  <Listas :lista1="meses" />
</template>

<style scoped>
  
</style>
