
//user goes to form 
//ask them what their height and weight is in ponds and feet 
const form = document.querySelector('form');
const heightFtInput = document.querySelector('#feet');
const heightInInput = document.querySelector('#inches');
const weightInput = document.querySelector('#weight');
const labelSelectFt = document.querySelector('#label-feet');
const labelSelectIn = document.querySelector('#label-inches');
const output = form.querySelector('output');

//setting default output of range sliders
var heightFt = Number(heightFtInput.value);
labelSelectFt.innerHTML = `${heightFt} feet`;
var heightIn = Number(heightInInput.value);
labelSelectIn.innerHTML = `${heightIn} inches`;

//listening to range sliders
heightFtInput.addEventListener('input', function(event){
	var heightFt = Number(heightFtInput.value);
	labelSelectFt.innerHTML = `${heightFt} feet`;
});

heightInInput.addEventListener('input', function(event){
	var heightIn = Number(heightInInput.value);
	labelSelectIn.innerHTML = `${heightIn} inches`;
});





form.addEventListener('submit', function(event){
	event.preventDefault();
	
	//make sure they completed the form 
	if(heightFtInput.value && heightInInput.value && weightInput.value){
		//look at info make sure they're real numbers 
		var heightFt = Number(heightFtInput.value);
		var heightIn = Number(heightInInput.value);
		var weight = Number(weightInput.value);
		//convert feet to inches
		var ftConversion = heightFt * 12;
		var totalHeightIn = ftConversion + heightIn;
		//do math
		var bmi = (weight/(totalHeightIn * totalHeightIn)) * 703;
		bmi = Math.round(bmi * 100)/100;
		console.log(bmi);
		//compare to good bmi
		//tell them if they're healthy
		if(bmi > 25){
			output.innerHTML = `<p style="color:red;">Your BMI is ${bmi}. \nThat's too high. Lose some weight.</p>`;
		}
		if(bmi < 18.5){
			output.innerHTML = `<p style="color:red;">Your BMI is ${bmi}. \nThat's too low. Gain some weight.</p>`;
		}

		if(bmi <= 25 && bmi >= 18.5){
			output.innerHTML = `<p style="color:green;">Your BMI is ${bmi}. \nThat's good! You're a normal weight!</p>`;
		}
	
	} else {
		//if they didnt tell them
		output.innerHTML = `Please complete the form.`;
	}
});

