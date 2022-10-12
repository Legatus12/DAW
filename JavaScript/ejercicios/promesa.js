const promesa = (posicion, lista) => {
    return new Promise((resolve, reject)=>{
        setTimeout(() => {
            if(posicion < lista.length)
                resolve(`${lista[posicion]}`);
            else
                reject("Index out out bounds")
        }, 2000);
    });
}

promesa(2, ["cero", "uno", "dos"])
.then(datos => console.log(datos))
.catch(datos => console.log(datos))

console.log("Estoy esperando");
console.log("Estoy esperando");
console.log("Estoy esperando");