import input from './input.mjs';

const ej1 = input
                .filter(x => x.pais === "China" && x.anio_coche === 1993)
                .reduce((ac, el) => ac + parseFloat(el.precio_coche.substr(1)),0)
                .toFixed(2);

const ej2 = input
                .filter(x => x.pais === "South Africa")
                .reduce((ac, el) => ac.anio_coche > el.anio_coche ? ac : el, input[0])
                .cuenta_bancaria;


console.log(`Los chinos pagaron ${ej1}$ por sus coches en 1993.`);
console.log(`La cuenta bancaria del propietario con el coche más nuevo de South Africa es ${ej2}.`);