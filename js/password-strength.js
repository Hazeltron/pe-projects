console.clear();


function setupPassword(){
	const form = document.querySelector('.password-form form');
	const passInput = document.querySelector('#password');
	


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
}

setupPassword();


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


function passStrength(num, letters, specialChars, length) {

    const output = document.querySelector(' output');

    if (specialChars) {
        output.innerHTML = `Invalid password. <br> Passwords should be eight characters, include a number and a special character.`;
    } else if ((num || letters) && length <= 8 && specialChars === false) {
        output.innerHTML = `<p>Your password is weak. <br> Passwords should be eight characters, include a number and a special character.</p>`;
    } else if (num && letters && length <= 8 && specialChars === false) {
        output.innerHTML = `<p>Your password is weak. <br> Passwords should be eight characters, include a number and a special character.</p>`;
    } else if (num && letters && length >= 8 && specialChars === false) {
        output.innerHTML = `<p>Your password is strong.<br> Passwords should be eight characters, include a number and a special character.</p>`;
    } else if (num && letters && specialChars && length >= 8) {
        output.innerHTML = `<p>Your password is very strong.</p>`;
    }
}



