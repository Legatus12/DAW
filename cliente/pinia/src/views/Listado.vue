<script setup>

import { storeCourses } from "@/stores/courses.js"
const courses = storeCourses()

</script>


<template>
    <h1>Listado</h1>
    <ul>
        <li v-for="course in courses.list">
            {{ course }}
            <button @click="courses.list.deleteCourse(course.id)"></button>
        </li>

    </ul>
</template>


<style scoped>

</style>