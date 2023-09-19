console.clear();

//person goes to form
//ask them for their age 
//ask their state
//look at list of state driving ages 
//test the age against legal driving age of state 
//if they are above or equal to legal age then tell them they can drive
//Then look at all states ages and test their age against those
//tell them which states they can't drive in

var drivingPlaces = [
  {
    "name": "Alabama",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Alaska",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 21
  },
  {
    "name": "Arizona",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "Arkansas",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "California",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Colorado",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Connecticut",
    "agePermit": 16,
    "ageRestricted": 16.3,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Delaware",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17,
    "ageRental": 21
  },
  {
    "name": "District of Columbia",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 18,
    "ageRental": 21
  },
  {
    "name": "Florida",
    "agePermit": 15,
    "ageRestricted": 16.5,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Georgia",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Hawaii",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Idaho",
    "agePermit": 14.5,
    "ageRestricted": 15,
    "ageLicense": 16,
    "ageRental": 20
  },
  {
    "name": "Illinois",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 21
  },
  {
    "name": "Indiana",
    "agePermit": 15,
    "ageRestricted": 16.3,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Iowa",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Kansas",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "Kentucky",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Louisiana",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Maine",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.8,
    "ageRental": 20
  },
  {
    "name": "Maryland",
    "agePermit": 15.8,
    "ageRestricted": 16.5,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Massachusetts",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Michigan",
    "agePermit": 14.8,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Minnesota",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 21
  },
  {
    "name": "Mississippi",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "Missouri",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17.9,
    "ageRental": 20
  },
  {
    "name": "Montana",
    "agePermit": 14.5,
    "ageRestricted": 15,
    "ageLicense": 16,
    "ageRental": 21
  },
  {
    "name": "Nebraska",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Nevada",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "New Hampshire",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "New Jersey",
    "agePermit": 16,
    "ageRestricted": 17,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "New Mexico",
    "agePermit": 15,
    "ageRestricted": 15.5,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "New York",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "North Carolina",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "North Dakota",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 16,
    "ageRental": 21
  },
  {
    "name": "Ohio",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Oklahoma",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "Oregon",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Pennsylvania",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Rhode Island",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17.5,
    "ageRental": 20
  },
  {
    "name": "South Carolina",
    "agePermit": 15,
    "ageRestricted": 15.5,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "South Dakota",
    "agePermit": 14,
    "ageRestricted": 14.5,
    "ageLicense": 16,
    "ageRental": 21
  },
  {
    "name": "Tennessee",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Texas",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Utah",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Vermont",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "name": "Virginia",
    "agePermit": 15.5,
    "ageRestricted": 16.3,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "Washington",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "name": "West Virginia",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "name": "Wisconsin",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.8,
    "ageRental": 20
  },
  {
    "name": "Wyoming",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  }
]

const form = document.querySelector('form');
const output = form.querySelector('output');
const ageInput = document.querySelector('#age');
const stateInput = document.querySelector('select')


function renderOption(state){
	return `<option value="${state.name}">${state.name}</option>`;
}

function renderOptions(states){
	var template = ``;
	states.forEach(function(state){
		template += renderOption(state);
	});
	return template;
}

function renderSelect(states){
	stateInput.innerHTML = renderOptions(states);
	

}

function getStateByName(name){
	return drivingPlaces.find(function(state){
		return state.name == name;
	});
}

renderSelect(drivingPlaces);


function handleDrivingCalc(){
	if(ageInput.value && stateInput.value){
		var age = Number(ageInput.value);
		var state = getStateByName(stateInput.value);
		console.log(age);
		console.log("s", state);
		
		if(age >= state.ageLicense){
			return output.innerHTML = `<p>You're old enough to drive in ${state.name}</p>`;
		} else {
			return output.innerHTML = `<p>You're too young to drive in ${state.name}</p>`;
		}
	}

}

form.addEventListener('submit', function(event){
	event.preventDefault();
	handleDrivingCalc();
});
