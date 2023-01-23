import axios from 'axios';

//fetch
const fetchPokemon = ()=> {
   fetch('https://pokeapi.co/api/v2/pokemon?limit=10')
     .then((response) => response.json())
     .then((allpokemon) => console.log(allpokemon.results))
 }

// async await
 const fetchPokemonA = async () => {
   try {
     const response = await fetch('https://pokeapi.co/api/v2/pokemon?limit=10');
     const allpokemon = await response.json();
     return allpokemon.results;
   } catch (error) {
     console.log(error);
   }
}

// axios
const axiosPokemon = async (limit) => {
  try {
    const response = await axios.get(`https://pokeapi.co/api/v2/pokemon?limit=${limit}`)
    return response.data.results;
  } catch (error) {
    console.log(error);
  }
}

//fetch
const fetch2 = (name) => {
  fetch(`https://pokeapi.co/api/v2/pokemon/${name}`)
    .then((response) => response.json())
    .then((allpokemon) => console.log(allpokemon.sprites.front_default))
}

// async await
const fetchPokemonB = async (name) => {
  try {
    const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${name}`);
    const allpokemon = await response.json();
    return [allpokemon.name, allpokemon.height, allpokemon.sprites.front_default];
  } catch (error) {
    console.log(error);
  }
}

// axios
const axiosPokemon2 = async (name) => {
 try {
   const response = await axios.get(`https://pokeapi.co/api/v2/pokemon/${name}`)
   return response.data.sprites.front_default;
 } catch (error) {
   console.log(error);
 }
}


export {fetchPokemon, fetchPokemonA, axiosPokemon, fetch2, fetchPokemonB, axiosPokemon2};
