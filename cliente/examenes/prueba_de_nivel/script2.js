
let data = ["A", "B", "C", "D"]
let array = [];

for (let i = 0; i < data.length; i++) {
    let n;
    let m;
    do{
        n = Math.floor(Math.random() * data.length);
        do{
            m = Math.floor(Math.random() * data.length);
        }while(m == n)
    }while(array.includes(data[n]) && array.includes(data[m]))
    array.push([data[n], data[m]])
}


console.log(array);