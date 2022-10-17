const screen = document.getElementById("screen");
const previous = document.getElementById("previous");
let operation = null;
let operating = false;
let numbers = [];

const buttons = document.getElementsByClassName("button");
const operators = document.getElementsByClassName("operator");
const specials = document.getElementsByClassName("specials");

console.log(numbers);

[...buttons].forEach(x => x.addEventListener("click", () => {
    if(operating)
        screen.innerHTML = "";

    operating = false;
    screen.innerHTML += x.innerHTML;
    console.log(x);
    }));

[...operators].forEach(x => x.addEventListener("click", () => {
    console.log(numbers);
    switch(x.innerHTML){
        case "+" :
            previous.innerHTML = screen.innerHTML;
            operation = "x";
        case "-" :
            if(numbers.length <= 2)
                numbers.push(Number(screen.innerHTML));
            operation = "-";
            operating = true;
            break;
        case "x" :
            if(numbers.length <= 2)
                numbers.push(Number(screen.innerHTML));
            operation = "x";
            operating = true;
            break;
        case "/" :
            if(numbers.length <= 2)
                numbers.push(Number(screen.innerHTML));
            operation = "/";
            operating = true;
            break;
    }}));

    [...specials].forEach(x => x.addEventListener("click", () => {
        switch(x.innerHTML){
            case "C" :
                previous.innerHTML = "";
                screen.innerHTML = "";
                numbers = [];
                console.log(numbers);
                break;
            case "." :
                screen.innerHTML += ".";
                break;
        }
        }));

document.getElementById("equal").addEventListener("click", () => {
    switch(operation){
        case "+" :
            screen.innerHTML = numbers[0] + numbers[1];
            break;
        case "-" :
            screen.innerHTML = numbers[0] - numbers[1];
            break;
        case "x" :
            screen.innerHTML = numbers[0] * numbers[1];
            break;
        case "/" :
            screen.innerHTML = numbers[0] / numbers[1];
            break;
        }
});