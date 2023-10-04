console.clear();

const form = document.querySelector('form');
const wordOne = document.querySelector('#first-word');
const wordTwo = document.querySelector('#second-word');
const output = document.querySelector('output');

//go to form
//ask for two words
//make sure form is complete 
//make sure they are letters 
//if they aren't make them complete the form again
//tell them only letters 
//look at words and see if they have the same letters 
//if they do tell person that they are anagrams 
//if they don't tell person that they don't
//write it in a sentence 

function realtext(word1, word2) {
	var letterCheck = /[a-zA-Z]/;
	var validInp = letterCheck.test(word1, word2);
	console.log(validInp);

}

form.addEventListener('submit', function(event){
	var word1 = wordOne.value;
	var word2 = wordTwo.value;
	console.log(word1);
	console.log(word2);

	realtext(word1, word2);
	console.log(realtext);

	



	



	
})



