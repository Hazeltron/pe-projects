gsap.registerPlugin(ScrollTrigger);

gsap.from("plink-container .main-img", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "30% 85%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container h2 span:nth-of-type(1)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "40% 85%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container h2 span:nth-of-type(2)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "40% 80%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container text-content .droplet-one", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "60% 80%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container text-content .droplet-two", {
    scrollTrigger: {
        trigger: "plink-container ul",
        toggleActions: "play pause resume reset",
        start: "60% 80%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container h3", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "40% 75%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container ul", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "40% 70%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container a span:nth-of-type(1)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "30% 64%",
        // markers: true   
    },
    duration: .7, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container a span:nth-of-type(2)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "30% 60%",
        // markers: true   
    },
    duration: .7, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container a span:nth-of-type(3)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "30% 56%",
        // markers: true   
    },
    duration: .7, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container a span:nth-of-type(4)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "30% 52%",
        // markers: true   
    },
    duration: .3, 
    y: 25, 
    opacity: 0
});

//   gsap.from("tect-content", {stagger: 0.4, opacity: .5})