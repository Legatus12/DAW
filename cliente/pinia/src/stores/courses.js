import { ref, computed } from "vue"
import { defineStore } from "pinia"

export const storeCourses = defineStore("courses", () => {
    
    const list = ref([
        {id: 1, name: "daw", start: "", end: "", students: 0}
    ])

    const deleteCourse = (id) => {
        list.value.filter(x => x.id != id)
    }
  
    return {
        list,
        deleteCourse
    }
})