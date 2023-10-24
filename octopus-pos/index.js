import {menuItemsData} from "./data/menu-items.js";
import {tableData} from "./data/table-details.js";
import {serverData} from "./data/server-details.js";
import{orders} from "./data/order.js";

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

function render(currentTable, orders) {
	let template = `<ul>`;
	let visualTotal = `<p> Total: `;
	let taxTotal = `<p> Total with tax: `;
	let itemsAcess = []
	orders.forEach(function(order){
		if(currentTable === order.tableNum){
			let total = 0;

			order.items.forEach(function(item){
			console.log(currentTable);
			let price = item.price;
			let name = item.name;
			
			let orderItem = `<li>${name}	$${price}</li>`;
			template += orderItem;
			
			
			console.log(orderItem);
			total += price;
	
			itemsAcess.push({name, price});
			})
			visualTotal += total;
			console.log(total);
			
			let withTax = total * 1.03;
			taxTotal += withTax;
			console.log(withTax);
		}
	})
	template += `<ul>`;
	visualTotal += `</p>`
	taxTotal += `</p>`
	console.log(visualTotal);
	outlet.innerHTML = `

	<button data-back="back">Back</button>
	<h1>Ticket for Table #${currentTable}</h1>
	<section>
		<h2>Order Details</h2>
		${template}
		${visualTotal}
		${taxTotal}

		<button type="submit" data-send="send">Send to kitchen</button>
	</section>
	`

}

loadPage(loginTemplate);
loadPage(mapTemplate);
loadPage(buildOrder(4));

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
				time: "",
				serverName: "Cinder",
				items: [item],
				tableNum: currentTable
			  };
	  
			  orders.push(newOrder);
			  
			}
		}
	  
		checkOrders(orders, currentTable);
		console.log(orders);
		loadPage(buildOptions(selectedItem));
		order.add(item);
		renderOrder(order);
		addToStorage(`Table ${currentTable}`, JSON.stringify(orders));
	}

	if (click.target.matches ('[data-submit]') ) {
			loadPage(buildOrder(currentTable));
	}

	if (click.target.matches ('[data-complete]') ) {
			loadPage(buildTicket(currentTable));
			getStorage(`Table ${currentTable}`);
			render(currentTable, orders);	
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

