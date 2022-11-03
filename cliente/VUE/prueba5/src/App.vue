<template>
  <Component :elementos="listaFiltered" :filtro="this.filtrar_por"/>
</template>

<script>
// Importo mi componente
import Component from "@/components/Component.vue";

export default {
  // Digo que tengo este componente, así lo renderizo
  components: {Component},
  // Como me llamo
  name: "App",
  // Mis objetos de datos
  data() {
    return {
      lista: [],
      filtrar_por: "",
      filtroActivo: false,
    };
  },
  methods: {
    recibido(data) {
      this.lista.push(data);
      console.log(this.lista);
    },
    filtra(data) {
      this.filtrar_por = data;
    },
    ActivaFiltro(data) {
      console.log("Hemos recibido el cambio");
      console.log("Con el valor", data);
      this.filtroActivo = data;
    },
    //Recibe de la lista el elemento a eliminar y lo hace
    eliminaElemento(data){
      this.lista = this.lista.filter((el)=> el !== data);
    }
  },
  computed: {
    listaFiltered() {
      return this.filtroActivo
        ? this.lista.filter((el) => el.includes(this.filtrar_por))
        : this.lista;
    },
  },
};
</script>

<style scoped>
h1 {
  color: blue;
}
</style>