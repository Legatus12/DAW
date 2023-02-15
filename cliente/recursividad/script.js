
const rec = (n) => n == 1 ? 1 : n + rec(n - 1)

const recarray = (array) => array.length == 0 ? 0 : array.shift() + recarray(array)

const recobjarray = (array) => array.length == 0 ? 0 : array.shift().age + recobjarray(array)

//

console.log(rec(3))

console.log(recarray([1, 2, 3]))

console.log(recobjarray([{n: "n", age : 1}, {n: "n", age : 2}, {n: "n", age : 3}]))