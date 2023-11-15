const vacationStudy = document.querySelector('.case-study-content[data-target="vacation"]');
const hydroStudy = document.querySelector('.case-study-content[data-target="hydro"]');
const disStudy = document.querySelector('.case-study-content[data-target="dis"]');
const timlandStudy = document.querySelector('.case-study-content[data-target="timland"]');
const montanaStudy = document.querySelector('.case-study-content[data-target="cans"]');
const starStudy = document.querySelector('.case-study-content[data-target="starbucks-content"]');
const productStudy = document.querySelector('.case-study-content[data-target="product-list"]');
const coolGirlsStudy = document.querySelector('.case-study-content[data-target="girls"]');
const vacationButton = document.querySelector('.vacation');
const hydroButton = document.querySelector('.hydro');
const disButton = document.querySelector('.dis');
const timlandButton = document.querySelector('.timland');
const montanaButton = document.querySelector('.cans');
const starbucksButton = document.querySelector('.starbucks-button');
const productButton = document.querySelector('.product-list');
const coolGirlsButton = document.querySelector('.girls');

function displayContent(content) {
    if (content.style.display !== 'block') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
}

vacationButton.addEventListener('click', function() {
    displayContent(vacationStudy);
});

hydroButton.addEventListener('click', function() {
    displayContent(hydroStudy);
});

disButton.addEventListener('click', function() {
    displayContent(disStudy);
});

timlandButton.addEventListener('click', function() {
    displayContent(timlandStudy);
});

montanaButton.addEventListener('click', function() {
    displayContent(montanaStudy);
});

starbucksButton.addEventListener('click', function() {
    displayContent(starStudy);
});
//doesnt work below
productButton.addEventListener('click', function() {
    displayContent(productStudy);
});
coolGirlsButton.addEventListener('click', function() {
    displayContent(coolGirlsStudy);
});



const vacationWire = document.querySelector('.layouts[data-wire="vacation"]');
const hydroWire = document.querySelector('.layouts[data-wire="hydro"]');
const disWire = document.querySelector('.layouts[data-wire="dis"]');
const timlandWire = document.querySelector('.layouts[data-wire="timland"]');
const montanaWire = document.querySelector('.layouts[data-wire="cans"]');
const starWire = document.querySelector('.layouts[data-wire="starbucks-content"]');
const productWire = document.querySelector('.layouts[data-wire="product-list"]');
const coolGirlsWire = document.querySelector('.layouts[data-wire="girls"]');
const vacationButtonWire = document.querySelector('.vacation-wire');
const hydroButtonWire = document.querySelector('.hydro-wire');
const disButtonWire = document.querySelector('.dis-wire');
const timlandButtonWire = document.querySelector('.timland-wire');
const montanaButtonWire = document.querySelector('.cans-wire');
const starbucksButtonWire = document.querySelector('.starbucks-button-wire');
const productButtonWire = document.querySelector('.product-wire');
const coolGirlsButtonWire = document.querySelector('.cool-girls-wire');

function toggleBorder(layout) {
    layout.classList.toggle('bordered');
}

vacationButtonWire.addEventListener('click', function() {
    toggleBorder(vacationWire);
});

hydroButtonWire.addEventListener('click', function() {
    toggleBorder(hydroWire);
});

disButtonWire.addEventListener('click', function() {
    toggleBorder(disWire);
});

timlandButtonWire.addEventListener('click', function() {
    toggleBorder(timlandWire);
});

montanaButtonWire.addEventListener('click', function() {
    toggleBorder(montanaWire);
});

starbucksButtonWire.addEventListener('click', function() {
    toggleBorder(starWire);
});

productButtonWire.addEventListener('click', function() {
    toggleBorder(productWire);
});

coolGirlsButtonWire.addEventListener('click', function() {
    toggleBorder(coolGirlsWire);
});



const rangeSliderStar = document.querySelector('#range');
const rangeSliderCards = document.querySelector('#cards-range');
const rangeSliderHydro = document.querySelector('#hydro-range');
const rangeSliderDis = document.querySelector('#dis-range');
const rangeSliderTimland = document.querySelector('#timland-range');
const rangeSliderCans = document.querySelector('#cans-range');
const rangeSliderProduct = document.querySelector('#product-range');
const rangeSliderCoolGirls = document.querySelector('#cool-girls-range');
const vacationScreen = document.querySelector('.screen[data-screen="vacation"]');
const hydroScreen = document.querySelector('.screen[data-screen="hydro"]');
const disScreen = document.querySelector('.screen[data-screen="dis"]');
const timlandScreen = document.querySelector('.screen[data-screen="timland"]');
const montanaScreen = document.querySelector('.screen[data-screen="cans"]');
const starScreen = document.querySelector('.screen[data-screen="starbucks-content"]');
const productScreen = document.querySelector('.screen[data-screen="product-list"]');
const coolGirlsScreen = document.querySelector('.screen[data-screen="girls"]');


//when I move the slider I want the "screen" to change widths
//I want the @media breakpoints to respond accordingly

function changeScreenSize(slider, screen) {
    const screenValue = slider.value;
    screen.style.width = screenValue + "vw";
};

rangeSliderStar.addEventListener('input', function() {
    console.log("test");
    changeScreenSize(rangeSliderStar,  starScreen);
});

rangeSliderCards.addEventListener('input', function() {
    console.log("test");
    changeScreenSize(rangeSliderCards,  vacationScreen);
});

rangeSliderHydro.addEventListener('input', function() {
    console.log("test");
    changeScreenSize(rangeSliderHydro,  hydroScreen);
});

rangeSliderDis.addEventListener('input', function() {
    console.log("test");
    changeScreenSize(rangeSliderDis,  disScreen);
});

rangeSliderTimland.addEventListener('input', function() {
    console.log("test");
    changeScreenSize(rangeSliderTimland,  timlandScreen);
});


rangeSliderCans.addEventListener('input', function() {
    console.log("test");
    changeScreenSize(rangeSliderCans,  montanaScreen);
});

rangeSliderProduct.addEventListener('input', function() {
    console.log("test");
    changeScreenSize(rangeSliderProduct,  productScreen);
});

rangeSliderCoolGirls.addEventListener('input', function() {
    console.log("test");
    changeScreenSize(rangeSliderCoolGirls,  coolGirlsScreen);
});