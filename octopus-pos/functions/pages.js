import { menuItemsData } from "../data/menu-items.js";

import { getStorage } from "./site.js";

function table(tableData){
	return`
	<button data-table='${tableData.id}'>
		${tableData.name}
	</button>
	`
}


function tables(tableList){
	var template = `<ul>`;
		tableList.forEach(function(tabl){
			template += table(tabl);
		});
		template += `</ul>`;
		return template;
}

function menuItem(item){
	return `
		<button data-item='${item.id}'>
			${item.name}
			$${item.price}
		</button>
	`;
}


function menuItems(items){
	var template = `<ul>`;
	items.forEach(function(item){
		template += menuItem(item);
	});
	template += `</ul>`; 
	return template;
}


function menuTemplate(currentOrder){
	return `
		<section class="tables-block">
			<h1>Menu</h1>
			${menuItems(menuItemsData)}
			
		</section>
	`;
} 

function buildOrder(table){
	return`
	<h1>Menu</h1>
	<h2>Table #${table}</h2>
	<section class="menu-block">
		<form class="menu">

		${menuItems(menuItemsData)}
		<ol></ol>
		<button type="submit" data-complete="finish-order">Complete Order</button>

		</form>
	</section>
	`
}

function renderOrder(order) {
	var outlet = document.querySelector('ol');
	outlet.innerHTML = order.items.map(function(item){
		return `<li>${item.name}</li>`
	});
}

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

function buildTicket(table){
	return`
	
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






//makes table button

//button expects menu item
//makes a button with menu item name


// click item
//go to options page
//keep the table number and item id
//have buttons for options
//have a save button



export {
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
}