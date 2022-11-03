<template>
    <!--entrada-->
    <div class="w-full sm:max-w-md p-5 mx-auto">
        <div class="mb-4">
        <label class="block mb-1" for="cajaEntrada">Añade</label>
        <input
            ref="input"
            v-model="entrada"
            id="personaje"
            type="text"
            name="CajaEntrada"
            class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full"
            @keydown.enter="enviaEntrada"
        />
        </div>
    </div>
    <!--filtro-->
    <div class="w-full sm:max-w-md p-5 mx-auto">
        <div class="mb-4">
        <label class="block mb-1" for="cajaFiltro">Filtra</label>
        <input
            ref="input"
            v-model="filtro"
            id="personaje2"
            type="text"
            name="CajaFiltro"
            class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full"
            @keydown.enter="enviaFiltro"
        />
        </div>
    </div>
    <!--checkbox-->
    <div class="w-full sm:max-w-md p-5 mx-auto">
        <div class="mb-4">
        <label class="block mb-1" for="cajaEntrada">{{ marcado }}</label>
        <input
            id="cajaEntrada"
            v-model="checked"
            type="checkbox"
            class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full"
        />
        </div>
    </div>
    <!--lista-->
    <div class="mt-32">
        <div class="px-4 sm:px-8 max-w-5xl m-auto">
            <h1 class="text-center font-semibold text-sm">Elementos</h1>
            <p class="mt-2 text-center text-xs mb-4 text-gray-500">
                Puedes filtrar activando el checkBox
            </p>
            <ul class="border border-gray-200 rounded overflow-hidden shadow-md">
                <li
                v-for="el in elementos" class="px-4 py-2 bg-white hover:bg-sky-100 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">
                <!--Elemento lista-->
                    <div>
                        <p>{{ el }} 
                            <button @click="eliminar" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                                eliminar
                            </button>
                        </p>   
                    </div>         
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Component",
        emits: ["emitEntrada", "emitFiltro", "eliminar"],
        data(){
            return{
                entrada: "",
                blanquear: true,
            }
        },
        props:{
            elementos: Array,
            filtro: String,
        },
        methods:{
            enviaEntrada(){   
            this.$emit("emitEntrada", this.entrada);  
            if (this.blanquear)  this.entrada = "";   
            this.$refs.input.focus();
            },
            enviaFiltro(){   
            this.$emit("emitFiltro", this.filtro);  
            if (this.blanquear)  this.filtro = "";   
            this.$refs.input.focus();
            },
            eliminar() { //Aquí, en breve, utilizaremos una modal para trabajar los slots....
                if (confirm(`¿Estás seguro de eliminar a ${ this.elemento }?`)) this.$emit("eliminar", this.elemento);
            },
        }
    }
</script>

<style scoped>

</style>