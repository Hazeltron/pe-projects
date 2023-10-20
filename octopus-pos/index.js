import {menuItemsData} from "./data/menu-items.js";
import {tableData} from "./data/table-details.js";
import {serverData} from "./data/server-details.js";

import{
	loadPage,
	getItemById,
	addToStorage,
    getStorage,
} from './functions/site.js';

import {
	table,
	tables,
	menuItem,
	menuItems,
	menuTemplate,
    buildOrder,
    renderOrder,
	buildOptions,
	buildTicket,
	checkOut,
} from './functions/pages.js';

console.clear();



//when a new order is staarted creeate a new order and save it as a key in this object
//start new order when the first item is added to the table
const orders = [
		{
			open: true, //bullion
			time: "", //date and time
			serverName: "Cinder",//string
			items: [], //array
			tableNum: "1"//string

		},
]





const appName = "OctoPOS"; // string
const outlet = document.querySelector('section.screen');
let password = "";
const myPassword = "1111";
const savedData = localStorage;


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
		outlet.innerHTML = menuTemplate("something");
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

let currentTable;
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
		//this is where you would create new order in the orders object
		//check if order exists for this table
		//if it doesn't create a new order
		const selectedItem = click.target.dataset.item;
		const  item = getItemById(selectedItem);


		function checkOrders(orders, currentTable) {
			let orderExists = false;
	  
			orders.forEach(function (order, id) {
			  if (order.open === true && currentTable === order.tableNum) {
				console.log("Order exists");
				orders[id].items.push(item);
				orderExists = true;
			  }
			});
	  
			if (!orderExists) {
			  console.error("Order doesn't exist");
			 
			  const newOrder = {
				open: true,
				time: "", // Fill in your date and time
				serverName: "Cinder",
				items: [item], // Add the selected item to the items array
				tableNum: currentTable
			  };
	  
			  orders.push(newOrder);
			  console.log(orders);
			}
		  }
	  
		  checkOrders(orders, currentTable);
		


			
			
			//loadPage(buildOptions(selectedItem));
			
			//adding to order
			order.add(item);


			


			renderOrder(order);
			//show updated order on the screen 
			
			


			//saving to local storage
			addToStorage(`Table ${currentTable}`, JSON.stringify(orders));
	}

	if (click.target.matches ('[data-submit]') ) {
			loadPage(buildOrder(currentTable));
	}

	if (click.target.matches ('[data-complete]') ) {
			loadPage(buildTicket(currentTable));
			getStorage(`Table ${currentTable}`);
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
		this.items.push({
			...item,
			sent:false
		});
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

// console.log(order.items);




console.log(outlet);

//building login
loadPage(loginTemplate);
loadPage(mapTemplate);
loadPage(buildOrder(4));
