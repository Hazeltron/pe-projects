console.clear();

//ask for a date that matters to user 
//make sure they give you one 
//look at numners and make sure they are within range
//make numbers equal words 
//return result to user 
var monthsData = [
  {
    "name": "February",
    "short": "Feb",
    "number": 2,
    "days": 28
  },
  {
    "name": "January",
    "short": "Jan",
    "number": 1,
    "days": 31
  },
  
  {
    "name": "March",
    "short": "Mar",
    "number": 3,
    "days": 31
  },
  {
    "name": "April",
    "short": "Apr",
    "number": 4,
    "days": 30
  },
  {
    "name": "May",
    "short": "May",
    "number": 5,
    "days": 31
  },
  {
    "name": "June",
    "short": "Jun",
    "number": 6,
    "days": 30
  },
  {
    "name": "July",
    "short": "Jul",
    "number": 7,
    "days": 31
  },
  {
    "name": "August",
    "short": "Aug",
    "number": 8,
    "days": 31
  },
  {
    "name": "September",
    "short": "Sep",
    "number": 9,
    "days": 30
  },
  {
    "name": "October",
    "short": "Oct",
    "number": 10,
    "days": 31
  },
  {
    "name": "November",
    "short": "Nov",
    "number": 11,
    "days": 30
  },
  {
    "name": "December",
    "short": "Dec",
    "number": 12,
    "days": 31
  }
]

// okay so idk, I was trying to make a loop for the months/days/years so I thought
// maybe we get a JSON file with years and dates. This one doesn't look great.
// Then before I tried this, I wanted to concert the date format to a number.
// Now I'm confused what I want to do 

//maybe we should just let them manually enter the numbers 



const form = document.querySelector('form');
const monthSelect = document.querySelector('#month');
const daySelect = document.querySelector('#day');
const dateInputY = document.querySelector('#year');
const output = document.querySelector('output');
const optionInput = document.querySelector('option');






//creates option
function renderOption(option){
	return `<option value="${option.number}">${option.name}</option>`;
}
//for each piece of data go over it
//make a blank template 
//add the previous function to the template 
//return the template 
function renderOptions(options){
	var template = ``;
	options.forEach(function(option){
		template += renderOption(option);
	});
	return template;
}

//take the previous function 
//stick it in the inner html of month select
//put it on the page
function renderSelect(options, outlet){
	outlet.innerHTML = renderOptions(options);
	buildDaysList(monthsData[0].days);

}

//finding names of dates 
//stopping loop when we find a name that corresponds
//with what was entered?
function getDateByName(name){
	return dates.find(function(date){
		return dates.name == name;
	});
}
//running render select
renderSelect(monthsData, monthSelect);




function buildDaysList(daysInMonth){
   
  //separate the days into eachh day 
  var theString = ``;

  for(var i = 1; i <= daysInMonth; i++){
   
    theString = theString + `<option>${i}</option>`;
    

  }
  daySelect.innerHTML = theString;
} 


function findMonthById(id) {
  return monthsData.find(function(month) {
    return month.number == id;
  })
} 




monthSelect.addEventListener('change', function(event){
  console.log(monthSelect.value);//going to be 2
  //based on this number 2 (month number) we need to get days 
  var days = findMonthById(monthSelect.value).days;
  buildDaysList(days);

})




form.addEventListener('submit', function(event){
	event.preventDefault();
	var month = monthSelect.value;
	var day = daySelect.value;
	var year = dateInputY.value;

	if(month && day && year){
		
		console.log(date);

	} else {
		output.innerHTML = `<p>Enter something, please.</p>`
	}
	
	
	
	
	
});		