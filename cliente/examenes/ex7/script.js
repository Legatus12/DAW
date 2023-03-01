const server = 'http://localhost:3000/cities'

const select = document.getElementById("mySelect")
const text = document.getElementById("myText")
const input = document.getElementById("myInput")
const form = document.getElementById("myForm")

window.addEventListener('DOMContentLoaded', async() => {
    const response = await axios.get(server)
    response.data.map(el => {
        let option = document.createElement("option")
        option.text = el.name
        select.add(option)
    })

    text.innerHTML = select.value
})

form.addEventListener('submit', (event) => {
    event.preventDefault()
    input.value == '' 
        ? alert('el input está vacío') 
        : axios.post(server, { name: input.value })
})

select.addEventListener('click', () => text.innerHTML = select.value)