const person1 = {
    age : 30,
    fullname : {
        name : "Peter",
        surname : "Peterson"
    }
};

const person2 = {...person1};
person2.fullname = {...person1.fullname};

person2.age = 20;

person2.fullname.name = "Walter";
person2.fullname.surname = "Walterson";

console.log(person1);
console.log(person2);