const miNuevoMensaje = document.getElementById('nuevo-mensaje')
const misRespuestas = document.getElementById('respuestas')
const boton = document.getElementById('boton')

//const servidorWS = 'ws:/localhost:8080'

const select = document.getElementById('select')

//Controlamos la conexión a nuestro servidor WebSocket

let aux = []

let miWebSocket

document.getElementById('on').addEventListener('click', () => {
    miWebSocket = new WebSocket(select.value)
    miWebSocket.addEventListener('open', open);
    miWebSocket.addEventListener('message', message);
    miWebSocket.addEventListener('error', error);
    miWebSocket.addEventListener('close', close);
})

document.getElementById('off').addEventListener("click" ,() => miWebSocket.close() )

//load ips
window.addEventListener('DOMContentLoaded', async() => {
    boton.style.display = 'none';
    const response = await axios.get('http://localhost:3000/servers')
    console.log(response.data)
    response.data.map(ip => {
        let option = document.createElement('option')
        option.text = ip.url
        select.add(option)
    })
})

// Funciones
const open = () => {
    // Abre conexión
    console.log("WebSocket abierto.");
}

const message = async (evento) => {
    // Se recibe un mensaje
    console.log("WebSocket ha recibido un mensaje");
    boton.style.display = 'block';
    // Mostrar mensaje en HTML
    const mensajeRecibido = await evento.data 
    aux.push(mensajeRecibido)
}

boton.addEventListener('click', () => {
    aux.forEach(message => {
        misRespuestas.innerHTML = misRespuestas.innerHTML.concat(message, '<br>');
    })
    aux = []
    boton.style.display = 'none';
})

const error = (evento) => {
    // Ha ocurrido un error
    console.error("WebSocket ha observado un error: ", evento);
}

const close =  () =>  {
    // Cierra la conexión
    console.log("WebSocket cerrado.");
}

const enviarNuevoMensaje = (evento) => {
    // Evento tecla Enter
    if(evento.code === 'Enter') {
        // Envia mensaje por WebSockets
        miWebSocket.send(miNuevoMensaje.value);
        // Borra texto en el input
        miNuevoMensaje.value = '';
    }
}

// Evento para envia nuevo mensaje
miNuevoMensaje.addEventListener('keypress', enviarNuevoMensaje);
