import { getDocuments, onGetDocuments } from './firebase.js';

//

const list = document.getElementById("list");
const form = document.getElementById("form");

window.addEventListener('DOMContentLoaded', async() => {
    await onGetDocuments("pets", (docs) => {
        docs.forEach(pet => {
            const { animal, petName } = pet.data();
            list.innerHTML += `
            <div>
                <h2>${petName}</h2>
                <h3>${animal}</h3>
            </div>`
        })
    })
})

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const petName = form['petName'].value;
    const animal = form['animal'].value;
    list.innerHTML += `
    <div>
        <h2>${petName}</h2>
        <h3>${animal}</h3>
    </div>
    `
    form.reset();
});