gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(Draggable);

const container = document.querySelector("sticker-container");

const tigerSticker = document.querySelector("sticker-container .tiger");

const carSticker = document.querySelector("sticker-container .car");

const consoleSticker = document.querySelector("sticker-container .console");

const flowerLadySticker = document.querySelector("sticker-container .flower-lady");

const sumoSticker = document.querySelector("sticker-container .sumo");

const stickyNote = document.querySelector("sticker-container sticky-note");

// gsap.from("sticker-container h2", {
//     scrollTrigger: {
//         trigger: "sticker-container",
//         toggleActions: "play pause resume reset",
//         start: "30% 85%",
//         // markers: true   
//     },
//     duration: .2, 
//     y: 25,
//     opacity: 0
// });



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

Draggable.create(stickyNote, {
	bounds: container, 
	type: "x,y",
	onDrag: function() {
		console.log("dragging !");
		
	}
});