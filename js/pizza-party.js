
console.clear();

//person goes to form
//ask how many people at party
//Ask how many pizzas 
//ask how many slices per pizza 
//make sure they entered these
//if not tell them to try again
//make sure you have real numbers
//round numbers to whole numbers 
//divide slices by people
//tell them how many pieces they can have 

const form = document.querySelector('form');
const output = form.querySelector('output');

// console.log(document.getElementsById('numPeople'));
//Basically shorthand for get element by id 

const peopleInput = document.querySelector('#people');
const pizzaInput = document.querySelector('#pizza');
const slicesInput = document.querySelector('#slices');




form.addEventListener('submit', function(event){
	event.preventDefault();

	if(peopleInput.value && pizzaInput.value && slicesInput.value){
		var people = parseInt(peopleInput.value);
		var pizza = parseInt(pizzaInput.value);
		var slices = parseInt(slicesInput.value);

		var totalSlices = pizza * slices;
		var slicesPerPerson = totalSlices / people;
		slicesPerPerson = Math.floor(slicesPerPerson);

		output.innerHTML = `<p class="calm-voice">Each person at your wonderful pizza party can have ${slicesPerPerson} slices of pizza!</p>`
		if(slicesPerPerson < 1){
			output.innerHTML = `<p class="calm-voice">You've failed to order enough pizza. Currently your guest outnumber slices.</p>`
		}
	} else {
		output.innerHTML = `<p>Please enter numbers for all three inputs.</p>`;
	}

});


// var copy = `
// 	<h1>Something</h1>
// 	<p>Something else</p>		
// `;

// output.innerHTML = copy;


