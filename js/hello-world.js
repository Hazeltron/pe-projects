console.clear();



const form = document.querySelector('form');
const input = form.querySelector('input');
const outlet = document.querySelector('output');

form.addEventListener('submit', function(event){
	event.preventDefault();

	if(input.value) {
		var message = `Hi there, ${input.value}, it's nice to meet you!`;
		outlet.innerHTML = `<p>${message}</p>`;
	} else {
		message = `Please enter a name.`
		outlet.innerHTML = `<p>${message}</p>`;
	}
});