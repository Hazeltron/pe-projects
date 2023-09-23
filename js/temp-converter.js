//person comes to form 
//selects c or f
//enters their temp
//need to make sure the number is a real number 
//make sure they submitted the whole form
//if they didnt, tell them 
//take the number and if c was selected run it's math
//if f was selected run its math 
//tell them what the conversion is 


const form = document.querySelector('form');
const tempInput = document.querySelector('#temp');
const output = document.querySelector('output');
var tempType = "fahrenheit";



form.addEventListener('input', function(){
	
	tempType = document.querySelector('input:checked').value;

});


form.addEventListener('submit', function(event){
	event.preventDefault();
	var temp = parseFloat(tempInput.value);

	if(tempType == "celsius"){

		var celsius = (temp-32)*5/9; 
		console.log(celsius);
		output.innerHTML = `<p>${temp} degrees fahrenheit is ${celsius} in celsius.</p>`

	}

	if(tempType == "fahrenheit"){
		var fahrenheit = (temp*9/5)+32;
		output.innerHTML = `<p>${temp} degrees celsius is ${fahrenheit} in fahrenheit.</p>`
	}
});
