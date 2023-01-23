import path from 'path';
import fs from 'fs';

const input = fs.readFileSync(path.join('.', 'input.txt'), 'utf8').split("\n").map(x => Number(x));

let max = 0;
let sum = 0;
for (let i = 0; i < input.length; i++) {
    if(input[i+1] == ""){
        sum += input[i];
        sum > max ? max = sum : max;
        sum = 0;
    }
    else{
        sum += input[i];
    }
}

console.log(max);