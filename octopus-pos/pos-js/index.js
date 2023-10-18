console.clear();

//menuItem
//id/slug
//name
//category (main/drinks/etc.)
//notes
//temp


//actual menu JSON
const menuItemsData = [
	{
		name: "Hamburger",
		id: "hamburger",
		category: "entrees",
	},
	{
		name: "Fish",
		id: "fish",
		category: "entrees",
	},
	{
		name: "Pizza",
		id: "pizza",
		category: "entrees",
	},
]





const appName = "Octopus"; // string
const outlet = document.querySelector('section.screen');
let password = "";
const myPassword = "1111";

//page loading function
function loadPage(pageTemplate) {
	outlet.innerHTML = pageTemplate;
}


const loginTemplate = `
	<section class="sign-in-block">
		<h1>Login</h1>
		<form class='sign-in'>
			<button data-login='1'>1</button>
			<button data-login='2'>2</button>
			<button data-login='3'>3</button>
			<button data-login='4'>4</button>
			<button data-login='5'>5</button>
			<button data-login='6'>6</button>
			<button data-login='7'>7</button>
			<button data-login='8'>8</button>
			<button data-login='9'>9</button>
		</form>
	</section>
`;


const mapTemplate = `
	<section class="tables-block">
		<h1>Floor Plan</h1>
		
		<form class='tables'>
			<button data-table='1'>#1</button>					
			<button data-table='2'>#2</button>
			<button data-table='3'>#3</button>
			<button data-table='4'>#4</button>
			<button data-table='5'>#5</button>
			<button data-table='6'>#6</button>
		</form>
	</section>
`;

function buildTicket(table){
	return`
	<button data-back="back">Back</button>
	<h1>Ticket for Table #${table}</h1>
	<section>
		<button type="submit" data-send="send">Send to kitchen</button>
	</section>
	`
}


function buildOrder(table){
	return`
	<h1>Menu</h1>
	<h2>Table #${table}</h2>
	<section class="menu-block">
		<form class="menu">
	${menuItems(menuItemsData)}

	<button type="submit" data-complete="finish-order">Complete Order</button>
		</form>
	</section>
	`
}

function checkOut(table) {
	return`
	<h1>Check Out Table #${table}</h1>
	<section>
		<form>
			<h2>The price is...</h2>
			<button data-checkout="pay">Pay</button>
		</form>
	</section>
	`
}

//hypothetically creates buttons/page using menuItmsData using MenuItems function 
const menuTemplate = `
	<section class="tables-block">
		<h1>Menu</h1>
		
		
		
		${menuItems(menuItemsData)}
		

	</section>
`;

//button expects menu item
//makes a button with menu item name

function menuItem(item){
	return `
		<button data-item='${item.id}'>
			${item.name}
		</button>
	`;
}

//list out menu items
//look at list and make list with each name

function menuItems(items){
	var template = `<ul>`;
	items.forEach(function(item){
		template += menuItem(item);
	});
	template += `</ul>`; 
	return template;
}
// click item
//go to options page
//keep the table number and item id
//have buttons for options
//have a save button

function buildOptions(selectedItem){
	return`
	<h1>Build ${selectedItem}</h1>
	<section>

		<h2>Course</h2>
		<form class="courses">
			<label>Course 1</lable>
			<input type="radio" name="course" value="course-1" data-course="1"></input>
			<label>Course 2</lable>
			<input type="radio" name="course" value="course-2" data-course="2">Course 2</input>
			<label>Course 3</lable>
			<input type="radio" name="course" value="course-3" data-course="3">Course 3</input>
			<label>Course 4</lable>
			<input type="radio" name="course" value="course-4" data-course="4">Course 4</input>
			
			<h2>Seat Number</h2>
			<label>Course 4</lable>
			<input type="range" name="seat-number" data-seat="seat" step="1" max="20" min="1">
			
			<button data-submit="submit">Finish ${selectedItem}</button>
		</form>
	</section>
	`

	
}



//fuck this function 
//Just add all the options up here ^ with radios/slider/whatever
//save them after they're set 
//go back to menu to add new item.
function specifyCourse(selectedCourse){
	return`
	<h2>courses</h2>
	<section>
		<form>
			<button data-course="1">Course 1</button>
		</form>
	<section>
	`
}







//building login
loadPage(loginTemplate);


//lisens for nav clicks and directs to pages
document.addEventListener('click', function(click) {
	click.preventDefault();
	
	if ( click.target.matches('[data-screen="login"]') ) {
		loadPage(loginTemplate);
	}

	if ( click.target.matches('[data-screen="map"]') ) {
		loadPage(mapTemplate);
	}
	
	if ( click.target.matches('[data-screen="menu"]') ) {
		loadPage(menuTemplate);
	}

	if(click.target.matches('[data-screen="ticket"]') ) {
		loadPage(buildTicket());
	}

	
});


//listens to login and directs to home(floor plan)
document.addEventListener('click', function(click){
	if(click.target.matches(`[data-login]`)){
		if(click.target.dataset.login == '1'){
			const password = click.target.dataset.login;
			console.log(password);
			loadPage(mapTemplate);
		} else {
		loadPage(loginTemplate);
			console.log("no");
		}
		
	} 
});


var currentTable = null;
//listens for table selection and leads to menu
document.addEventListener('click', function(click){
	click.preventDefault();
	if (click.target.matches ('[data-table]') ) {
			const selectedTable = click.target.dataset.table;
			currentTable = selectedTable;
			loadPage(buildOrder(currentTable));
			console.log(currentTable);
	}

	if (click.target.matches ('[data-item]') ) {
			const selectedItem = click.target.dataset.item;
			loadPage(buildOptions(selectedItem));
	}

	if (click.target.matches ('[data-submit]') ) {
			loadPage(buildOrder(currentTable));
	}

	if (click.target.matches ('[data-complete]') ) {
			loadPage(buildTicket(currentTable));
	}

	if (click.target.matches ('[data-back]') ) {
			loadPage(buildOrder(currentTable));
	}

	if (click.target.matches ('[data-send]') ) {
			loadPage(checkOut(currentTable));
	}

	if (click.target.matches ('[data-checkout]') ) {
			loadPage(mapTemplate);
	}

	
});











//class that adds-removes-changes the order in theory
class Order {
	constructor(){
		this.items = [];
		this.itemId = 0;
	}

	add(item){
		item = {itemId:this.itemId++, name: item, done:false};
		this.items.push(item);
		console.log(`added ${item.name}`);
	}

	remove(id){
		const removedItem = this.items.splice(id, 1)[0];
		console.log(`removed ${removedItem.name}`);
	}

	done(id){
		this.items[id].done = true;
	}
	change(id, newItem = ""){
		//This is actually creating an entire new array, might wan to find specific name 
		this.items = this.items.map( function(item){
			if(item.itemId === id){
				return {...item, name:newItem};
			}
			return item;
		});
		
	}

}

const order = new Order();
order.add('pizza');
order.add('cake');


order.change(1, "something");
order.done(0);

console.log(order.items);


console.log(outlet);

// class Entrees {
// 	constructor(food, price){
// 		this.mains = [];
// 		this.mainId = 0;
// 		this.mainItem = food;
// 		this.price = price;
// 	}
// }

// class ItemList {
// 	constructor(){
// 		this.id = 0;
// 		this.items = [];
// 		}

// 	add(content) {
// 		item = new ITEMS(this.id++, content);
// 		this.items[...items, content];
// 		console.log(items);
// 	}
// }


// const entrees = new Entrees();
// const ItemList = new ItemList();
// entrees("pizza", 32);
// ItemList.add(entrees);


/* NEXT STEPS? */

/* make a map... for tables...  */
/* when you click a table - then you are taken to the menu... but it now knows you're on that table... so you can save the items in the order... (so you also need a page for the menu) */


// P O S

// (CRUD)

// ITEM (menu items)  (the whole system)
// add/change/remove/mark-as-86/fire (sent to station)

// ORDER
// add/remove/leave note about item/add-ons/remove ingredient

// BILL
// add up prices of all the things - and add tax
// gratuity?

// PAGE ("view") ("screen")
// Change pages? -- also, navigation to get between them

// - login screen (each server has a password)
// - tables diagram
// - main menu screen (knows what table you're talking about)
/////// group things.... and then fire them (courses)
// checkout / payment

// - clock in/clock out (bonus ideas for later)