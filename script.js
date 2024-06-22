const nums = [1, 2, 3, 5];

function add() {
  return arguments[0] + arguments[1] + arguments[2];
}

console.log(add(...nums));
