const app = Vue.createApp({
    data() {
        return {
            nombre : "Pablo",
            apellidos : "Lantigua Santos",
            items : [1,2,3,4,5],
        }
    },
    methods:{
        changeName(){
            this.nombre = "nombre";
        },
    },
});
app.mount('#miApp');