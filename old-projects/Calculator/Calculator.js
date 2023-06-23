function mathStuff() {
  var answer = document.querySelector('#answer')
  var input1 = Number(document.querySelector('#num1').value);
  var input2 = Number(document.querySelector('#num2').value);
  var selector = document.querySelector('select');
  var operator = selector.options[selector.selectedIndex].value;

  if (operator === 'minus') {answer.innerHTML = input1 - input2;}
    else if (operator === 'add') {answer.innerHTML = input1 + input2;}
  else if (operator === 'divide') {answer.innerHTML = input1 / input2;}
  else if (operator === 'multiply') {answer.innerHTML = input1 * input2;}
  else {answer.innerHTML = "Invalid"}
}

/*
//this is a self envoking function
(function() {
  var body = document.querySelector('body');
  body.style.backgroundColor = 'blue';
  body.style.color = 'green';
  body.innerHTML = 'Hello there';
})();
*/
try {
  var name = prompt('what name?')
if(name === 'paul') {
  alert('Hello paul');
} else {
  alert("That's a dumb name...");
  throw "unknown_name"
  }
}
catch(error){
  if (error === 'unknown_name') {
    document.querySelector('#error').innerHTML ='You have a dumb name, do you know that?';
  }else {
    document.querySelector('#error').innerHTML = error.message;
  }
  console.log(error, error.message);
}
finally{
  console.log('try-throw-catch-finally has exicuted');
}
