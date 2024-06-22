// declaration statement
let x;
let y = 5;

// assignment statement
x = 10;
x = y + 2;

// conditional statement
if (x > y) {
  console.log("X is greater than Y");
} else if (x === y) {
  console.log("x is equal to y");
} else {
  console.log("x is less than y");
}

// switch statement
switch (x) {
  case 5:
    console.log("x is 5");
    break;
  case 10:
    console.log("x is 10");
    break;
  default:
    console.log("x is something else");
}

// function declaration statement
// return statement
function greet(name) {
  return "Hello " + name + "!";
}

// loop statement
for (let i = 0; i < 5; i++) {
  console.log(i);
}

let i = 0;
while (i < 5) {
  console.log(i);
  i++;
}

i = 0;
do {
  console.log(i);
  i++;
} while (i < 5);

// Break and Continue Statements
for (let i = 0; i < 10; i++) {
  if (i === 5) {
    // break;
    continue;
  }
  console.log(i);
}

// Expression Statement
let z = x + y;
z = x % 3;
console.log(z);
console.log(greet("ram"));

// ternary expression
let age = 16;
let isAdult = age >= 18 ? "Yes" : "No";
console.log(isAdult);

// Try...Catch Statement
try {
  let result = riskyOperation();
  console.log(result);
} catch (error) {
  console.log("An error occurred", error);
  if (error instanceof ReferenceError) {
    throw new Error("Reference Error");
  }
} finally {
  console.log("This will always run");
}

// Object and Array Initializer Expressions
let person = {
  myfirstName: "John",
  mylastName: "Doe",
  myage: 30,
};

let numbers = [1, 2, 3, 4, 5];

// Property Access Expressions
let firstName = person.myfirstName; // "John"
let lastNumber = numbers[4]; // 5

// Destructuring Expressions
let [first, second] = numbers; // first is 1, second is 2
let { myfirstName, myage } = person; // name is "Bob", age is 25

console.log(first, second);
console.log(myfirstName, myage);
