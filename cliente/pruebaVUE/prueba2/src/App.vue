<template>
  <div>
    <input type="text" ref="input" v-model="item">
    <button @click="addItem">add</button>
  </div>
  <div>
    filtrar =>
    <input type="text" v-model="filter" >
  </div>
  <div>
    <ul>
      <li v-for="item in filtered">{{ item }}</li>
    </ul>
  </div>
</template>

<script>
  export default{
    data(){
      return{
        item : "",
        items : [],
        filter : ""
      }
    },
    methods:{
      addItem(){
        console.log(this.item);
        this.items.push(this.item);
        this.item = "";
        this.$refs.input.focus();
      }
    },
    computed:{
      filtered(){
        if(this.filter !== "")
          return this.items.filter(x => x.includes(this.filter));
        else 
          return this.items;
      }
    }
  }
</script>

<style scoped>
  li{
    color:brown;
  }
</style>
