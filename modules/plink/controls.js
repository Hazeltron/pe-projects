gsap.registerPlugin(ScrollTrigger);

gsap.from("plink-container picture", {
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
        start: "40% 65%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container a span:nth-of-type(2)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "40% 63.2%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container a span:nth-of-type(3)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "40% 61.2%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

gsap.from("plink-container a span:nth-of-type(4)", {
    scrollTrigger: {
        trigger: "plink-container",
        toggleActions: "play pause resume reset",
        start: "40% 59.2%",
        // markers: true   
    },
    duration: .2, 
    y: 25,
    opacity: 0
});

//   gsap.from("tect-content", {stagger: 0.4, opacity: .5})