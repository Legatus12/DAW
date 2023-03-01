import { ref } from 'vue'
import { defineStore } from 'pinia'

export const useStore = defineStore('cities', () => {
  const list = ref([])
  const add = (city) => list.value.push(city)

  return { list, add }
})
