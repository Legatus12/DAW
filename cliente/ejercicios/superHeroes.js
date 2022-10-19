const superHeroes = [ 
	{nombre:'Batman', tipo:'DC'},
	{nombre:'Linterna Verde', tipo:'DC'},
	{nombre:'Lobezno', tipo:'Marvel'},
	{nombre:'Spiderman', tipo:'Marvel'},
];

const filtrar = (lista, tipo, tiempo = 2) => {
    return new Promise((resolve, reject)=>{
        setTimeout(() => {
            if(tipo == "DC" || tipo == "Marvel")
                resolve(lista.filter(x => x.tipo === tipo));
            else
                reject("tipo no encontrado");
        },tiempo * 1000);
    });
}

filtrar(superHeroes, 'DC', 2000)
.then(datos => console.log(datos))
.catch(datos => console.log(datos))

console.log("Estoy esperando");
console.log("Estoy esperando");
console.log("Estoy esperando");