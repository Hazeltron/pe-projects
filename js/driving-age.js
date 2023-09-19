//person goes to form
//ask them for their age 
//ask their state
//look at list of state driving ages 
//test the age against legal driving age of state 
//if they are above or equal to legal age then tell them they can drive
//Then look at all states ages and test their age against those
//tell them which states they can't drive in

var drivingAge = [
  {
    "state": "Alabama",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Alaska",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 21
  },
  {
    "state": "Arizona",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "Arkansas",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "California",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Colorado",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Connecticut",
    "agePermit": 16,
    "ageRestricted": 16.3,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Delaware",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17,
    "ageRental": 21
  },
  {
    "state": "District of Columbia",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 18,
    "ageRental": 21
  },
  {
    "state": "Florida",
    "agePermit": 15,
    "ageRestricted": 16.5,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Georgia",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Hawaii",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Idaho",
    "agePermit": 14.5,
    "ageRestricted": 15,
    "ageLicense": 16,
    "ageRental": 20
  },
  {
    "state": "Illinois",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 21
  },
  {
    "state": "Indiana",
    "agePermit": 15,
    "ageRestricted": 16.3,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Iowa",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Kansas",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "Kentucky",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Louisiana",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Maine",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.8,
    "ageRental": 20
  },
  {
    "state": "Maryland",
    "agePermit": 15.8,
    "ageRestricted": 16.5,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Massachusetts",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Michigan",
    "agePermit": 14.8,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Minnesota",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 21
  },
  {
    "state": "Mississippi",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "Missouri",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17.9,
    "ageRental": 20
  },
  {
    "state": "Montana",
    "agePermit": 14.5,
    "ageRestricted": 15,
    "ageLicense": 16,
    "ageRental": 21
  },
  {
    "state": "Nebraska",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Nevada",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "New Hampshire",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "New Jersey",
    "agePermit": 16,
    "ageRestricted": 17,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "New Mexico",
    "agePermit": 15,
    "ageRestricted": 15.5,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "New York",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "North Carolina",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "North Dakota",
    "agePermit": 14,
    "ageRestricted": 16,
    "ageLicense": 16,
    "ageRental": 21
  },
  {
    "state": "Ohio",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Oklahoma",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "Oregon",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Pennsylvania",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Rhode Island",
    "agePermit": 16,
    "ageRestricted": 16.5,
    "ageLicense": 17.5,
    "ageRental": 20
  },
  {
    "state": "South Carolina",
    "agePermit": 15,
    "ageRestricted": 15.5,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "South Dakota",
    "agePermit": 14,
    "ageRestricted": 14.5,
    "ageLicense": 16,
    "ageRental": 21
  },
  {
    "state": "Tennessee",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Texas",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Utah",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Vermont",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 16.5,
    "ageRental": 20
  },
  {
    "state": "Virginia",
    "agePermit": 15.5,
    "ageRestricted": 16.3,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "Washington",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 18,
    "ageRental": 20
  },
  {
    "state": "West Virginia",
    "agePermit": 15,
    "ageRestricted": 16,
    "ageLicense": 17,
    "ageRental": 20
  },
  {
    "state": "Wisconsin",
    "agePermit": 15.5,
    "ageRestricted": 16,
    "ageLicense": 16.8,
    "ageRental": 20
  },
  {
    "state": "Wyoming",
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

function loop(drivingArray){
	drivingArray.forEach(function (state){

	})
}

form.addEventListener('submit', function(event){
	event.preventDefault();
	if(ageInput.value && stateInput.value){
		var age = Number(ageInput.value);
		var state = stateInput.value;
		console.log(age);
		console.log(state);

		drivingAge.forEach(function(place){
			if(place.state == state){
				var selectedState = place.state;
				console.log(selectedState);
				if(place.ageLicense <= age){
					output.innerHTML = `<p>You're old enough to drive in ${selectedState}</p>`;
				} else {
					output.innerHTML = `<p>You're too young to drive in ${selectedState}</p>`;
				}
			}
		});
	}
});
