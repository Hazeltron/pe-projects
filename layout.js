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



