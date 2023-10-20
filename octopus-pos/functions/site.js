import { menuItemsData } from "../data/menu-items.js";

const outlet = document.querySelector('section.screen');

function loadPage(pageTemplate) {
	outlet.innerHTML = pageTemplate;
}

function getItemById(itemId){
    var menuItem = menuItemsData.find(function(item){
       return item.id === itemId;
    });

    if (menuItem) {
       return menuItem;
    } else {
       console.error("No menu Item waas found");
    }
}

const savedData = localStorage;
function addToStorage(key, value){
	savedData.setItem(key, JSON.stringify(value));
}

//get local storage function
function getStorage(key){
	const storageItem = savedData.getItem(key);
	console.log(JSON.parse(storageItem));
}


export {
    loadPage,
    getItemById,
    addToStorage,
    getStorage,

}