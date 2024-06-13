function normalFunction(a, b) {
  return a + b;
}

// Or as a function expression:
const normalFun = function (a, b) {
  return a + b; // requires return keyword to retrun value
};

const arrowFunction = (a, b) => a + b; // does not require return

// Normal fn has its own 'this' context
// which is dynamically scoped based on how the function is called.
const obj1 = {
  value: 10,
  normalFunction: function () {
    console.log(this.value); // `this` refers to `obj1`
  },
};

obj1.normalFunction(); // logs 10

// Arrow function does not have its own 'this' context
const obj = {
  value: 10,
  arrowFunction: () => {
    console.log(this.value); // `this` refers to the outer scope, not `obj`
  },
};

obj.arrowFunction(); // logs `undefined`

// Normal function have arguments object
// that contains all the arguments passed to the function
function normalFunction() {
  console.log(arguments);
}
normalFunction(1, 2, 3); // logs [1, 2, 3]

// Arrow function does not have arguments objects
const arrowFunction2 = (...args) => {
  console.log(args);
};

arrowFunction2(1, 2, 3); // logs [1, 2, 3]

// Normal function can be used as constructor
function Employee(name) {
  this.name = name;
}

const person = new Employee("Ram");
console.log(person);
