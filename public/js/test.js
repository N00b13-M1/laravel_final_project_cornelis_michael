var names = ["Kai", "Lars", "Anders", "Ole"
            , "Petter", "Mikael", "Cos", "Sin"];
var randName = [];

do {
  randName[randName.length] = names.splice(Math.floor(Math.random() * names.length), 1)[0];
} while (randName.length < 3);

console.log(randName)

// names.length

// var a = Math.random()
// var b = names.length


// console.log(a)

// console.log(b)

// console.log(a*b)

// console.log(
//     Math.floor(Math.random() * names.length))

// console.log(names.splice(4, 1))

// const fruits = ["Banana", "Orange", "Apple", "Mango"];

// At position 2, add 2 elements:
// console.log(fruits.splice(2, 2, "Lemon", "Kiwi"))

