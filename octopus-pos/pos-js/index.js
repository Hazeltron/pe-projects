
//menuItem
//id/slug
//name
//category (main/drinks/etc.)
//notes
console.clear();
//temp


//actual menu JSON
const menuItemsData = [
	{
		name: "Classic Burger",
		id: " classic burger",
		price: 10.00,
	},
	{
		name: "Bacon Ranch Burger",
		id: "bacon ranch burger",
		price: 13.00,
	},
	{
		name: "Blue Cheese Burger",
		id: "blue cheese burger",
		price: 11.00,
	},
	{
		name: "Mushroom Swiss Burger",
		id: "mushroom swiss burger",
		price: 12.00,
	},
	{
		name: "Fries",
		id: "fries",
		price: 5.00,
	},
	{
		name: "Drink",
		id: "drink",
		price: 4.00,
	},
]

const tableData = [
	{
		name: "1",
		id: 1,
	},
	{
		name: "2",
		id: 2,
	},
	{
		name: "3",
		id: 3,
	},
	{
		name: "4",
		id: 4,
	},
	{
		name: "5",
		id: 5,
	},
	{
		name: "6",
		id: 6,
	},
	{
		name: "7",
		id: 7,
	},
]

const serverData = [
	{
		name:"Paul",
		password:1996,
	},
	{
		name:"Derek",
		password:1234,
	},
	{
		name:"Ad",
		password:3145,
	},
	{
		name:"Cinder",
		password:1111,
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
			${tables(tableData)}
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

//creates buttons/page using menuItmsData using MenuItems function 
const menuTemplate = `
	<section class="tables-block">
		<h1>Menu</h1>
		
		
		
		${menuItems(menuItemsData)}
		

	</section>
`;

//makes table button
function table(tableData){
	return`
	<button data-table='${tableData.id}'>
		${tableData.name}
	</button>
	`
}
//loops through tables and makes button list
function tables(tableList){
	var template = `<ul>`;
		tableList.forEach(function(t){
			template += table(t);
		});
		template += `</ul>`;
		return template;
}
//button expects menu item
//makes a button with menu item name

function menuItem(item){
	return `
		<button data-item='${item.id}'>
			${item.name}
			$${item.price}
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
	<section class="options-block">
		<form class="options">
			<h2>Temp</h2>
			<label>Rare</lable>
			<input type="radio" name="temp" value="rare" data-temp="rare"></input>
			<label>Medium Rare</lable>
			<input type="radio" name="temp" value="medium rare" data-temp="medium-rare"></input>
			<label>Medium</lable>
			<input type="radio" name="temp" value="medium" data-temp="medium"></input>
			<label>Medium Well</lable>
			<input type="radio" name="temp" value="medium well" data-temp="medium-well"></input>
			<label>Well-Done</lable>
			<input type="radio" name="temp" value="well-done" data-temp="well-done"></input>
		
			
			
			<h2>Seat Number</h2>
			<label>Number</lable>
			<input type="range" name="seat-number" data-seat="seat" step="1" max="20" min="1">

			<h2>Notes</h2>
			<label>Add Note</label>
			<input type="text">


			
			<button data-submit="submit">Finish ${selectedItem}</button>
		</form>
	</section>
	`

	
}

//Just add all the options up here ^ with radios/slider/whatever
//save them after they're set 
//go back to menu to add new item.




//finds the price in object array 
function getPriceById(itemId){
	 var menuItem = menuItemsData.find(function(item){
		return item.id === itemId;
	 });

	 if (menuItem) {
		var cash = menuItem.price;
		console.log(cash);
		return cash;
	 }
}
getPriceById('drink');


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
			const price = getPriceById(selectedItem);
			loadPage(buildOptions(selectedItem));
			order.add(selectedItem, price, currentTable);
			console.log(order);
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

	add(item, price, table){
		item = {
			itemId:this.itemId++, 
			name: item, 
			price,
			table,
			done:false
		};
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