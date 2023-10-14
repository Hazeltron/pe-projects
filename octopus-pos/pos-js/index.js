console.clear();
const appName = "Octopus"; // string
const outlet = document.querySelector('section');
let password = "";
const myPassword = "1111";


function loadPage(pageTemplate) {
	outlet.innerHTML = pageTemplate;
}

const loginTemplate = `
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
`;


const mapTemplate = `
	<h1>MAP</h1>
	
	<form class='tables'>
		<button data-table='1'>#1</button>					
		<button data-table='2'>#2</button>
		<button data-table='3'>#3</button>
		<button data-table='4'>#4</button>
		<button data-table='5'>#5</button>
		<button data-table='6'>#6</button>
	</form>
`;
function buildMenu(table) {
	return`<h1>Menu</h1>
	<h2>Table #${table}</h2>
	<form class="menu">
		<button data-front-menu = 'main'>Entrees</button>
		<button data-front-menu = 'apps'>Apps</button>
		<button data-front-menu = 'sides'>Sides</button>
		<button data-front-menu = 'beer'>Beer</button>
		<button data-front-menu = 'wine'>Wine</button>
		<button data-front-menu = 'cocktails'>Cocktails</button>
		<button data-front-menu = 'dessert'>Dessert</button>
	</form>
	`;
}

function buildEntrees(main){
	return`
	<h1>Entrees</h1>
	<form>
	<button data-item = 'steak'>Steak</button>
	</form>`
}

function buildApps(app){
	return`
	<h1>Apps</h1>
	<form>
	<button data-item = 'cal'>Calamari</button>
	</form>`
}

function buildSides(side){
	return`
	<h1>Sides</h1>
	<form>
	<button data-item = 'fries'>Fries</button>
	</form>`
}

function buildBeer(beer){
	return`
	<h1>Beer</h1>
	<form>
	<button data-item = 'ipa'>IPA</button>
	</form>`
}

function buildWine(wine){
	return`
	<h1>Wine</h1>
	<form>
	<button data-item = 'pino'>Pino-Noir</button>
	</form>`
}

function buildCocktails(cocktail){
	return`
	<h1>Cocktails</h1>
	<form>
	<button data-item = 'old-f'>Old Fashion</button>
	</form>`
}

function buildDessert(dessert){
	return`
	<h1>Dessert</h1>
	<form>
	<button data-item = 'keylime'>Keylime Tart</button>
	</form>`
}

function buildOption(item, name){
	return`
	<h1>${name}</h1>
	<form>
	<button>course</button>
	</form>`
}


const menuTemplate = 
	`<h1>Menu</h1>
	<form>
	<button data-front-menu = 'main'>Entrees</button>
	<button data-front-menu = 'apps'>Apps</button>
	<button data-front-menu = 'sides'>Sides</button>
	<button data-front-menu = 'beer'>Beer</button>
	<button data-front-menu = 'wine'>Wine</button>
	<button data-front-menu = 'cocktails'>Cocktails</button>
	<button data-front-menu = 'dessert'>Dessert</button>
	</form>
	`;


loadPage(loginTemplate);

console.log(outlet);

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
});

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

document.addEventListener('click', function(click){
	click.preventDefault();
	if (click.target.matches ('[data-table]') ) {
			const selectedTable = click.target.dataset.table;
			const menu = buildMenu(selectedTable);
			loadPage(menu);
	}
});

document.addEventListener("click", function(click){
	click.preventDefault();
	if(click.target.matches("[data-front-menu='main']")){
		const selectedMenu = click.target.dataset.menu;
		const entrees = buildEntrees(selectedMenu);
		loadPage(entrees);
	}

	if(click.target.matches("[data-front-menu='apps']")){
		const selectedMenu = click.target.dataset.menu;
		const apps = buildApps(selectedMenu);
		loadPage(apps);
	}

	if(click.target.matches("[data-front-menu='sides']")){
		const selectedMenu = click.target.dataset.menu;
		const sides = buildSides(selectedMenu);
		loadPage(sides);
	}

	if(click.target.matches("[data-front-menu='beer']")){
		const selectedMenu = click.target.dataset.menu;
		const beer = buildBeer(selectedMenu);
		loadPage(beer);
	}

	if(click.target.matches("[data-front-menu='wine']")){
		const selectedMenu = click.target.dataset.menu;
		const wine = buildWine(selectedMenu);
		loadPage(wine);
	}

	if(click.target.matches("[data-front-menu='cocktails']")){
		const selectedMenu = click.target.dataset.menu;
		const cocktails = buildCocktails(selectedMenu);
		loadPage(cocktails);
	}

	if(click.target.matches("[data-front-menu='dessert']")){
		const selectedMenu = click.target.dataset.menu;
		const dessert = buildDessert(selectedMenu);
		loadPage(dessert);
	}

});

document.addEventListener('click', function(click){
	if(click.target.matches("[data-item]")){
		const selectedItem = click.target.dataset.menu;
		console.log(selectedItem);
		const options = buildOption(selectedItem, "selected");
		loadPage(options);
	}

})





//food items with prices 
//put all of those into an order and save them 
//connect them with the button inputs 

class Order {
	constructor(){
		this.order = [];
		this.itemId = 0;
	}

	add(item){
		item = {itemId:this.itemId++, name: item, done:false};
		this.order.push(item);
		console.log(`added ${item.name}`);
	}
	remove(id){
		const removedItem = this.order.splice(id, 1)[0];
		console.log(`removed ${removedItem.name}`);
	}

	done(id){
		this.order[id].done = true;
	}
	change(id, newItem = ""){
		
		this.order = this.order.map( function(order){
			if(order.itemId === id){
			return {...order, name:newItem};
			}
			return order;
		});
		
	}

}

const order = new Order();
order.add('pizza');
order.add('cake');
order.remove(1);

order.change(0, "something");
order.done(0);

console.log(order.order);

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