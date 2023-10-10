console.clear();
const appName = "Octopus"; // string
const outlet = document.querySelector('main');
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
	<form>
		<button>burgers</button>
		<button>pizza</button>
		<button>tator-tots</button>
		<button>beer</button>
		<button>wine</button>
		<button>ice-cream</button>
	</form>
	`;
}

const menuTemplate = 
	`<h1>Menu</h1>
	<form>
		<button>burgers</button>
		<button>pizza</button>
		<button>tator-tots</button>
		<button>beer</button>
		<button>wine</button>
		<button>ice-cream</button>
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
	if(click.target.matches('[data-table]')){
			const selectedTable = click.target.dataset.table;
			console.log(selectedTable);
			const menu = buildMenu(selectedTable);
			loadPage(menu);
	}
});

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