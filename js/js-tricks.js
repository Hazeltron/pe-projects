var div = document.querySelector('#div');
var toggle = document.querySelector('button');

function toggleTheme() {
	div.classList.toggle('fancy');
}

toggle.addEventListener('click', toggleTheme);



var section = document.querySelector('#navSection');

section.addEventListener('click', function(event){
	if(event.target.matches('[rel="toggle"]')) {
		section.classList.toggle('menu-open');
	}
});


	