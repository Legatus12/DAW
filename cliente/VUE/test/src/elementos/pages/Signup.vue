<template>
    <div>
        <form @submit.prevent="onSubmit">
        <label>usuario </label><input type="text" v-model="user">
        <br><br>
        <label>contraseña </label><input type="password" v-model="password">
        <br>
        <br>
        <label>nivel </label>
        <select v-model="level">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <br><br>
        <br><br>
        <input type="submit" @click="fuera" value="registrarse" class="bg-[#f6f6f6] p-4 rounded-full cursor-pointer">
        </form>
    </div>
</template>

<script setup>

import { ref } from 'vue';
import axios from 'axios';

import { useRouter } from 'vue-router';

const router = useRouter()

const user = ref("");
const password = ref("");
const level = ref(0);

const emits = defineEmits(["signedUp"]);

const fuera = () => {
    router.push({
        name: "Usuario",
        params: {nombre : user.value}
    })
}

const addUser = async() => {
if(user.value && password.value && level.value){
    try{
        const res = await axios.get(`http://localhost:3000/users/?user=${user.value}`);
        if(res.data.length < 1){
            await axios.post(`http://localhost:3000/users/`,
            {
                user: user.value,
                password: password.value,
                level: level.value
            })



            emits("signedUp", {
                user: user.value,
                password: password.value,
                level: level.value
            })

            user.value = "";
            password.value = "";
            level.value = "";
        }
        else
            console.log("ERROR: el usuario ya existe");
        
    } catch(error){
        console.log(error);
    }
}
else
    console.log("faltan datos");
}

</script>

<style lang="scss" scoped>

</style>