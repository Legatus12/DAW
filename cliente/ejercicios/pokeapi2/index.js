import { fetchPokemon, fetchPokemonA, axiosPokemon, fetch2, fetchPokemonB, axiosPokemon2} from './pokemon.mjs';
//async await
//const pokemonFetch = await fetchPokemonA();
//console.log(pokemonFetch);
//const lista = axiosPokemon(10);
//console.log(lista);

//console.log(fetch2("ditto"));
console.table(await fetchPokemonB("ditto"));
//console.log(await axiosPokemon2("ditto"));