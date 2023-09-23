console.clear();

const form = document.querySelector('form');
const passInput = document.querySelector('#password');
const output = document.querySelector('output');




//person goes to form 
//person inputs a password
//look at the password and see if the characters are numbers/letters/or special characters
//we follow these rules:
//weak:contains only numbers and is fewer than eight characters.
//strong: contains letters and at least one number and is at least eight characters.
//very strong: contains letters,numbers,and special characters and is at least eight characters.
//count the characters
//see if there are any numbers
//see if there are nay special characters
//test against conditions 
//tell the person how strong their password is

function classifyCharacters(input) {
	let result = {
		numbers: false,
		letters: false,
		specialChars: false,

	};

	for (let i = 0; i < input.length; i++) {
		var char = input.charAt(i);

		if (/[0-9]/.test(char)) {
			result.numbers = true;
		} else if (/[a-zA-Z]/.test(char)) {
			result.letters = true;
		} else {
			result.specialChars = true;
		}
	}

	return result;

}


function passStrength(num, letters, specialChars, length){
	if (specialChars) {
		output.innerHTML = `Invalid password. <br> Passwords should be eight characters, include a number and a special character.</p>`;
	}

	if ( (num  || letters) && length <= 8 && specialChars == false) {
		output.innerHTML = `<p>Your password is weak. <br> Passwords should be eight characters, include a number and a special character.</p>`;
	} else if (num && letters && length <= 8 && specialChars == false) {
		output.innerHTML = `<p>Your password is weak. <br> Passwords should be eight characters, include a number and a special character.</p>`;
	}
	 
	 if (num && letters && length >= 8 && specialChars == false) {
		output.innerHTML = `<p>Your password is strong.<br> Passwords should be eight characters, include a number and a special character.</p>`;
	} else if (num && letters && specialChars && length >= 8) {
		output.innerHTML = `<p>Your password is very strong.</p>`;
	}

}

form.addEventListener('submit', function(event) {
	event.preventDefault();

	var password = passInput.value;
	console.log(password);
	var passLength = password.length;
	console.log(passLength);
	classifyCharacters(password);
	var charType = classifyCharacters(password);
	console.log(charType);

	

	passStrength(charType.numbers, charType.letters, charType.specialChars, passLength);

});

