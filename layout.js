// const vacationStudy = document.querySelector('.case-study-content[data-target="vacation"]');
// const hydroStudy = document.querySelector('.case-study-content[data-target="hydro"]');
// const disStudy = document.querySelector('.case-study-content[data-target="dis"]');
// const timlandStudy = document.querySelector('.case-study-content[data-target="timland"]');
// const montanaStudy = document.querySelector('.case-study-content[data-target="cans"]');
// const starStudy = document.querySelector('.case-study-content[data-target="starbucks-content"]');
// const productStudy = document.querySelector('.case-study-content[data-target="product-list"]');
// const coolGirlsStudy = document.querySelector('.case-study-content[data-target="girls"]');
// const videoCtaStudy = document.querySelector('.case-study-content[data-target="video"]');
// const gameSpotStudy = document.querySelector('.case-study-content[data-target="game-spot-button"]');

// const vacationButton = document.querySelector('.vacation');
// const hydroButton = document.querySelector('.hydro');
// const disButton = document.querySelector('.dis');
// const timlandButton = document.querySelector('.timland');
// const montanaButton = document.querySelector('.cans');
// const starbucksButton = document.querySelector('.starbucks-button');
// const productButton = document.querySelector('.product-list');
// const coolGirlsButton = document.querySelector('.girls');
// const videoCtaButton = document.querySelector('.video');
// const gameSpotButton = document.querySelector('.game-spot-button');

// function displayContent(content) {
//     if (content.style.display !== 'block') {
//         content.style.display = 'block';
//     } else {
//         content.style.display = 'none';
//     }
// }

// vacationButton.addEventListener('click', function() {
//     displayContent(vacationStudy);
// });

// hydroButton.addEventListener('click', function() {
//     displayContent(hydroStudy);
// });

// disButton.addEventListener('click', function() {
//     displayContent(disStudy);
// });

// timlandButton.addEventListener('click', function() {
//     displayContent(timlandStudy);
// });

// montanaButton.addEventListener('click', function() {
//     displayContent(montanaStudy);
// });

// starbucksButton.addEventListener('click', function() {
//     displayContent(starStudy);
// });
// //doesnt work below
// productButton.addEventListener('click', function() {
//     displayContent(productStudy);
// });
// coolGirlsButton.addEventListener('click', function() {
//     displayContent(coolGirlsStudy);
// });
// videoCtaButton.addEventListener('click', function() {
//     displayContent(videoCtaStudy);
// });
// gameSpotButton.addEventListener('click', function() {
//     displayContent(gameSpotStudy);
// });





const vacationWire = document.querySelector('.layouts[data-wire="vacation"]');
// const hydroWire = document.querySelector('.layouts[data-wire="hydro"]');
const disWire = document.querySelector('.layouts[data-wire="dis"]');
const timlandWire = document.querySelector('.layouts[data-wire="timland"]');
const montanaWire = document.querySelector('.layouts[data-wire="cans"]');
const starWire = document.querySelector('.layouts[data-wire="starbucks-content"]');
const productWire = document.querySelector('.layouts[data-wire="product-list"]');
const coolGirlsWire = document.querySelector('.layouts[data-wire="girls"]');
const videoCtaWire = document.querySelector('.layouts[data-wire="video"]');
const gameSpotWire = document.querySelector('.layouts[data-wire="game-spot-button"]');

const vacationButtonWire = document.querySelector('.vacation-wire');
// const hydroButtonWire = document.querySelector('.hydro-wire');
const disButtonWire = document.querySelector('.dis-wire');
const timlandButtonWire = document.querySelector('.timland-wire');
const montanaButtonWire = document.querySelector('.cans-wire');
const starbucksButtonWire = document.querySelector('.starbucks-button-wire');
const productButtonWire = document.querySelector('.product-wire');
const coolGirlsButtonWire = document.querySelector('.cool-girls-wire');
const videoCtaButtonWire = document.querySelector('.video-wire');
const gameSpotButtonWire = document.querySelector('.game-wire');

function toggleBorder(layout) {
    layout.classList.toggle('bordered');
}

vacationButtonWire.addEventListener('click', function() {
    toggleBorder(vacationWire);
});

// hydroButtonWire.addEventListener('click', function() {
//     toggleBorder(hydroWire);
// });

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
videoCtaButtonWire.addEventListener('click', function() {
    toggleBorder(videoCtaWire);
});
gameSpotButtonWire.addEventListener('click', function() {
    toggleBorder(gameSpotWire);
});



const rangeSliderStar = document.querySelector('#range');
const rangeSliderCards = document.querySelector('#cards-range');
// const rangeSliderHydro = document.querySelector('#hydro-range');
const rangeSliderDis = document.querySelector('#dis-range');
const rangeSliderTimland = document.querySelector('#timland-range');
const rangeSliderCans = document.querySelector('#cans-range');
const rangeSliderProduct = document.querySelector('#product-range');
const rangeSliderCoolGirls = document.querySelector('#cool-girls-range');
const rangeSliderVideoCta = document.querySelector('#video-range');
const rangeSliderGameSpot = document.querySelector('#game-spot');


const vacationScreen = document.querySelector('.screen[data-screen="vacation"]');
// const hydroScreen = document.querySelector('.screen[data-screen="hydro"]');
const disScreen = document.querySelector('.screen[data-screen="dis"]');
const timlandScreen = document.querySelector('.screen[data-screen="timland"]');
const montanaScreen = document.querySelector('.screen[data-screen="cans"]');
const starScreen = document.querySelector('.screen[data-screen="starbucks-content"]');
const productScreen = document.querySelector('.screen[data-screen="product-list"]');
const coolGirlsScreen = document.querySelector('.screen[data-screen="girls"]');
const videoCtaScreen = document.querySelector('.screen[data-screen="video"]');
const gameSpotScreen = document.querySelector('.screen[data-screen="game-spot-button"]');


//I want to make the range slider respond to the screen size
function changeScreenSize(slider, screen) {
    const screenValue = slider.value;
    const windowSize = window.innerWidth;
    console.log(windowSize);
    screen.style.width = screenValue + "%";
};

function setupSlider(sliderId, screenDataAttr) {
    const rangeSlider = document.querySelector(`#${sliderId}`);
    const screen = document.querySelector(`.screen[data-screen="${screenDataAttr}"]`);

    rangeSlider.addEventListener('input', function() {
        console.log("test");
        changeScreenSize(rangeSlider, screen);
    });
}

setupSlider('range', 'starbucks-content');
setupSlider('cards-range', 'vacation');
// setupSlider('hydro-range', 'hydro');
setupSlider('dis-range', 'dis');
setupSlider('timland-range', 'timland');
setupSlider('cans-range', 'cans');
setupSlider('product-range', 'product-list');
setupSlider('cool-girls-range', 'girls');
setupSlider('video-range', 'video');
setupSlider('game-range', 'game-spot-button');