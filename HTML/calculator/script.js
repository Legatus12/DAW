const screen = document.getElementById("screen");
const previous = document.getElementById("previous");
let operation = null;
let writing = true;
let reapeating = false;
let numbers = [];

const buttons = document.getElementsByClassName("button");
const operators = document.getElementsByClassName("operator");
const specials = document.getElementsByClassName("specials");

[...buttons].forEach(x => x.addEventListener("click", () => {
    console.log(x.id);
    reapeating = false;
    if(!writing){
        screen.innerHTML = "";
        writing = true;
    }

    screen.innerHTML += x.innerHTML;
}));

[...operators].forEach(x => x.addEventListener("click", () => {
    reapeating = false;
    if(screen.innerHTML != ""){
        numbers[0] = (Number(screen.innerHTML));
        console.log(numbers);
        writing = false;
        console.log(x.id)
        switch(x.id){
            case "plus" :
                previous.innerHTML = screen.innerHTML + " + ";
                operation = "plus";
                break;
            case "minus" :
                previous.innerHTML = screen.innerHTML + " - ";
                operation = "minus";
                break;
            case "multiply" :
                previous.innerHTML = screen.innerHTML + " x ";
                operation = "multiply";
                break;
            case "divide" :
                previous.innerHTML = screen.innerHTML + " / ";
                operation = "divide";
                break;
}}}));

[...specials].forEach(x => x.addEventListener("click", () => {
    switch(x.innerHTML){
        case "C" :
            reapeating = false;
            screen.innerHTML = "";
            previous.innerHTML = "";
            numbers = [];
            console.log(numbers);
            break;
        case "." :
            reapeating = false;
            screen.innerHTML += ".";
            break;
    }
}));

document.getElementById("equal").addEventListener("click", () => {
    let result;
    if(screen.innerHTML != ""){
        console.log("equal");
        if(!reapeating){
            console.log("not repeating");
            numbers[1] = (Number(screen.innerHTML));
        }
        switch(operation){
        case "plus" :
            result = numbers[0] + numbers[1];
            previous.innerHTML = numbers[0] +" + "+ numbers[1] +" = "+ result;
            screen.innerHTML = result;
            break;
        case "minus" :
            result = numbers[0] - numbers[1];
            previous.innerHTML = numbers[0] +" - "+ numbers[1] +" = "+ result;
            screen.innerHTML = result;
            break;
        case "multiply" :
            result = numbers[0] * numbers[1];
            previous.innerHTML = numbers[0] +" x "+ numbers[1] +" = "+ result;
            screen.innerHTML = result;
            break;
        case "divide" :
            result = numbers[0] / numbers[1];
            previous.innerHTML = numbers[0] +" / "+ numbers[1] +" = "+ result;
            screen.innerHTML = result;
            break; 
        }
        numbers[0] = Number(screen.innerHTML);
        writing = false;
        reapeating = true;
        console.log(numbers);
}});