gsap.registerPlugin(ScrollTrigger);

gsap.from("plink-container [data-animate='movable']", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "top 85%",
        markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

//   gsap.from("tect-content", {stagger: 0.4, opacity: .5})