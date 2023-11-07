const vacationStudy = document.querySelector('.case-study-content[data-target="vacation"]');
const hydroStudy = document.querySelector('.case-study-content[data-target="hydro"]');
const disStudy = document.querySelector('.case-study-content[data-target="dis"]');
const timlandStudy = document.querySelector('.case-study-content[data-target="timland"]');
const montanaStudy = document.querySelector('.case-study-content[data-target="cans"]');
const starStudy = document.querySelector('.case-study-content[data-target="starbucks-content"]');
const vacationButton = document.querySelector('.vacation');
const hydroButton = document.querySelector('.hydro');
const disButton = document.querySelector('.dis');
const timlandButton = document.querySelector('.timland');
const montanaButton = document.querySelector('.cans');
const starbucksButton = document.querySelector('.starbucks-button');


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



const vacationWire = document.querySelector('.layouts[data-wire="vacation"]');
const hydroWire = document.querySelector('.layouts[data-wire="hydro"]');
const disWire = document.querySelector('.layouts[data-wire="dis"]');
const timlandWire = document.querySelector('.layouts[data-wire="timland"]');
const montanaWire = document.querySelector('.layouts[data-wire="cans"]');
const starWire = document.querySelector('.layouts[data-wire="starbucks-content"]');
const vacationButtonWire = document.querySelector('.vacation-wire');
const hydroButtonWire = document.querySelector('.hydro-wire');
const disButtonWire = document.querySelector('.dis-wire');
const timlandButtonWire = document.querySelector('.timland-wire');
const montanaButtonWire = document.querySelector('.cans-wire');
const starbucksButtonWire = document.querySelector('.starbucks-button-wire');


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



const screenSizeSlider = document.querySelector('#screen-size-slider');
const vacationScreen = document.querySelector('.screen[data-screen="vacation"]');
const hydroScreen = document.querySelector('.screen[data-screen="hydro"]');
const disScreen = document.querySelector('.screen[data-screen="dis"]');
const timlandScreen = document.querySelector('.screen[data-screen="timland"]');
const montanaScreen = document.querySelector('.screen[data-screen="cans"]');
const starScreen = document.querySelector('.screen[data-screen="starbucks-content"]');


//when I move the slider I want the screen to change widths
