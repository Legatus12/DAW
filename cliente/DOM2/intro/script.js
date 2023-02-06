import { onGetPets, addPet, deletePet, getPet } from './firebase.js'

//

const list = document.getElementById("list")
const form = document.getElementById("form")

window.addEventListener('DOMContentLoaded', async() => {
    await onGetPets('pets', (docs) => {
        let html = ''
        docs.forEach(pet => {
            const { animal, petName } = pet.data();
            html += `
            <div>
                <p>${petName}</p>
                <p>${animal}</p>
                <button class="delete-btn" data-id=${pet.id}>delete</button>
                <button class="edit-btn" data-id=${pet.id}>edit</button>
            </div>
            <br>`
        })
        list.innerHTML = html


        const deleteButtons = list.querySelectorAll('.delete-btn')
        console.log(deleteButtons)

        deleteButtons.forEach(btn => btn.addEventListener('click', async(e) => {
            console.log('echo')
            console.log(e.target.dataset.id) 
            await deletePet('pets', e.target.dataset.id)
        }))

        const editButtons = list.querySelectorAll('.edit-btn')
        console.log(editButtons)

        editButtons.forEach(btn => btn.addEventListener('click', async(e) => {
            const pet = await getPet('pets', e.target.dataset.id)
            const { animal, petName } = pet.data()
            form['animal'] = animal
            form['petName'] = petName
        }))
    })
})

//add
form.addEventListener('submit', (e) => {
    e.preventDefault()
    addPet("pets", { 
        animal: form['animal'].value, 
        petName: form['petName'].value 
    })
    form.reset()
})