gsap.registerPlugin(Draggable);

const container = document.querySelector("sticker-container");

const tigerSticker = document.querySelector("sticker-container .tiger");

const carSticker = document.querySelector("sticker-container .car");

const consoleSticker = document.querySelector("sticker-container .console");

const flowerLadySticker = document.querySelector("sticker-container .flower-lady");

const sumoSticker = document.querySelector("sticker-container .sumo");

Draggable.create(tigerSticker, {
	bounds: container, 
	type: "x,y",
	onDrag: function() {
		console.log("dragging !");
		
	}
});

Draggable.create(carSticker, {
	bounds: container, 
	type: "x,y",
	onDrag: function() {
		console.log("dragging !");
		
	}
});

Draggable.create(consoleSticker, {
	bounds: container, 
	type: "x,y",
	onDrag: function() {
		console.log("dragging !");
		
	}
});

Draggable.create(flowerLadySticker, {
	bounds: container, 
	type: "x,y",
	onDrag: function() {
		console.log("dragging !");
		
	}
});

Draggable.create(sumoSticker, {
	bounds: container, 
	type: "x,y",
	onDrag: function() {
		console.log("dragging !");
		
	}
});