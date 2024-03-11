

const plinkStudy = document.querySelector('.case-study-content[data-target="plink-button"]');
const mubasicStudy = document.querySelector('.case-study-content[data-target="mubasic-button"]');
const androidStudy = document.querySelector('.case-study-content[data-target="android-button"]');
const shellStudy = document.querySelector('.case-study-content[data-target="shell-button"]');
const vacationStudy = document.querySelector('.case-study-content[data-target="vacation"]');
// const hydroStudy = document.querySelector('.case-study-content[data-target="hydro"]');
// const disStudy = document.querySelector('.case-study-content[data-target="dis"]');
const timlandStudy = document.querySelector('.case-study-content[data-target="timland"]');
// const montanaStudy = document.querySelector('.case-study-content[data-target="cans"]');
const starStudy = document.querySelector('.case-study-content[data-target="starbucks-content"]');
const productStudy = document.querySelector('.case-study-content[data-target="product-list"]');
const coolGirlsStudy = document.querySelector('.case-study-content[data-target="girls"]');
const videoCtaStudy = document.querySelector('.case-study-content[data-target="video"]');
const gameSpotStudy = document.querySelector('.case-study-content[data-target="game-spot-button"]');
const marywoodStudy = document.querySelector('.case-study-content[data-target="marywood-button"]');
const atmosphereStudy = document.querySelector('.case-study-content[data-target="atmosphere-button"]');
const montuckyStudy = document.querySelector('.case-study-content[data-target="montucky-button"]');


const plinkButton = document.querySelector('.plink-button');
const mubasicButton = document.querySelector('.mubasic-button');
const androidButton = document.querySelector('.android-button');
const shellButton = document.querySelector('.shell-button');
const vacationButton = document.querySelector('.vacation');
// const hydroButton = document.querySelector('.hydro');
// const disButton = document.querySelector('.dis');
const timlandButton = document.querySelector('.timland');
// const montanaButton = document.querySelector('.cans');
const starbucksButton = document.querySelector('.starbucks-button');
const productButton = document.querySelector('.product-list');
const coolGirlsButton = document.querySelector('.girls');
const videoCtaButton = document.querySelector('.video');
const gameSpotButton = document.querySelector('.game-spot-button');
const marywoodButton = document.querySelector('.marywood-button');
const atmosphereButton = document.querySelector('.atmosphere-button');
const montuckyButton = document.querySelector('.montucky-button')

function displayContent(content) {
    if (content.style.display !== 'block') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
}


plinkButton.addEventListener('click', function() {
    displayContent(plinkStudy);
});


mubasicButton.addEventListener('click', function() {
    displayContent(mubasicStudy);
});

montuckyButton.addEventListener('click', function() {
    displayContent(montuckyStudy);
});

atmosphereButton.addEventListener('click', function() {
    displayContent(atmosphereStudy);
});

marywoodButton.addEventListener('click', function() {
    displayContent(marywoodStudy);
});

androidButton.addEventListener('click', function() {
    displayContent(androidStudy);
});

shellButton.addEventListener('click', function() {
    displayContent(shellStudy);
});

vacationButton.addEventListener('click', function() {
    displayContent(vacationStudy);
});

// hydroButton.addEventListener('click', function() {
//     displayContent(hydroStudy);
// });

// disButton.addEventListener('click', function() {
//     displayContent(disStudy);
// });

timlandButton.addEventListener('click', function() {
    displayContent(timlandStudy);
});

// montanaButton.addEventListener('click', function() {
//     displayContent(montanaStudy);
// });

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
videoCtaButton.addEventListener('click', function() {
    displayContent(videoCtaStudy);
});
gameSpotButton.addEventListener('click', function() {
    displayContent(gameSpotStudy);
});


// you havw to add
const mubasicWire = document.querySelector('.layouts[data-wire="mubasic-button"]');
const decimalWire = document.querySelector('.layouts[data-wire="decimal-button"]');
const androidWire = document.querySelector('.layouts[data-wire="android-button"]');
const shellWire = document.querySelector('.layouts[data-wire="shell-button"]');
const vacationWire = document.querySelector('.layouts[data-wire="vacation"]');
// const hydroWire = document.querySelector('.layouts[data-wire="hydro"]');
// const disWire = document.querySelector('.layouts[data-wire="dis"]');
const timlandWire = document.querySelector('.layouts[data-wire="timland"]');
// const montanaWire = document.querySelector('.layouts[data-wire="cans"]');
const starWire = document.querySelector('.layouts[data-wire="starbucks-content"]');
const productWire = document.querySelector('.layouts[data-wire="product-list"]');
const coolGirlsWire = document.querySelector('.layouts[data-wire="girls"]');
const videoCtaWire = document.querySelector('.layouts[data-wire="video"]');
const gameSpotWire = document.querySelector('.layouts[data-wire="game-spot-button"]');
const marywoodWire = document.querySelector('.layouts[data-wire="marywood-button"]');
const atmosphereWire = document.querySelector('.layouts[data-wire="atmosphere-button"]');
const montuckyWire = document.querySelector('.layouts[data-wire="montucky-button"]');


const mubasicButtonWire = document.querySelector('.mubasic-wire');
const decimalButtonWire = document.querySelector('.decimal-wire');
const androidButtonWire = document.querySelector('.android-wire');
const shellButtonWire = document.querySelector('.shell-wire');
const vacationButtonWire = document.querySelector('.vacation-wire');
// const hydroButtonWire = document.querySelector('.hydro-wire');
// const disButtonWire = document.querySelector('.dis-wire');
const timlandButtonWire = document.querySelector('.timland-wire');
// const montanaButtonWire = document.querySelector('.cans-wire');
const starbucksButtonWire = document.querySelector('.starbucks-button-wire');
const productButtonWire = document.querySelector('.product-wire');
const coolGirlsButtonWire = document.querySelector('.cool-girls-wire');
const videoCtaButtonWire = document.querySelector('.video-wire');
const gameSpotButtonWire = document.querySelector('.game-wire');
const marywoodButtonWire = document.querySelector('.marywood-wire');
const atmosphereButtonWire = document.querySelector('.atmosphere-wire');
const montuckyButtonWire = document.querySelector('.montucky-wire');

function toggleBorder(layout) {
    if (layout.classList.contains('bordered')) {
        layout.classList.remove('bordered');
    } else {
        layout.classList.add('bordered');
    }
}

mubasicButtonWire.addEventListener('click', function() {
    toggleBorder(mubasicWire);
});

decimalButtonWire.addEventListener('click', function() {
    toggleBorder(decimalWire);
});

montuckyButtonWire.addEventListener('click', function() {
    toggleBorder(montuckyWire);
});

atmosphereButtonWire.addEventListener('click', function() {
    toggleBorder(atmosphereWire);
});

marywoodButtonWire.addEventListener('click', function() {
    toggleBorder(marywoodWire);
});

androidButtonWire.addEventListener('click', function() {
    toggleBorder(androidWire);
});

shellButtonWire.addEventListener('click', function() {
    toggleBorder(shellWire);
});

vacationButtonWire.addEventListener('click', function() {
    toggleBorder(vacationWire);
});

// hydroButtonWire.addEventListener('click', function() {
//     toggleBorder(hydroWire);
// });

// disButtonWire.addEventListener('click', function() {
//     toggleBorder(disWire);
// });

timlandButtonWire.addEventListener('click', function() {
    toggleBorder(timlandWire);
});

// montanaButtonWire.addEventListener('click', function() {
//     toggleBorder(montanaWire);
// });

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


const rangeSliderAndroid = document.querySelector('#android-range');
const rangeSliderShell = document.querySelector('#shell-range');
const rangeSliderStar = document.querySelector('#range');
const rangeSliderCards = document.querySelector('#cards-range');
// const rangeSliderHydro = document.querySelector('#hydro-range');
// const rangeSliderDis = document.querySelector('#dis-range');
const rangeSliderTimland = document.querySelector('#timland-range');
// const rangeSliderCans = document.querySelector('#cans-range');
const rangeSliderProduct = document.querySelector('#product-range');
const rangeSliderCoolGirls = document.querySelector('#cool-girls-range');
const rangeSliderVideoCta = document.querySelector('#video-range');
const rangeSliderGameSpot = document.querySelector('#game-spot');
const rangeSliderMarywood = document.querySelector('#marywood-range');

const androidScreen = document.querySelector('.screen[data-screen="android"]');
const shellScreen = document.querySelector('.screen[data-screen="shell"]');
const vacationScreen = document.querySelector('.screen[data-screen="vacation"]');
// const hydroScreen = document.querySelector('.screen[data-screen="hydro"]');
// const disScreen = document.querySelector('.screen[data-screen="dis"]');
const timlandScreen = document.querySelector('.screen[data-screen="timland"]');
// const montanaScreen = document.querySelector('.screen[data-screen="cans"]');
const starScreen = document.querySelector('.screen[data-screen="starbucks-content"]');
const productScreen = document.querySelector('.screen[data-screen="product-list"]');
const coolGirlsScreen = document.querySelector('.screen[data-screen="girls"]');
const videoCtaScreen = document.querySelector('.screen[data-screen="video"]');
const gameSpotScreen = document.querySelector('.screen[data-screen="game-spot-button"]');
const marywoodScreen = document.querySelector('.screen[data-screen="marywood"]');


//I want to make the range slider respond to the screen size
const layouts = document.querySelectorAll("layout-section-wrapper");






function getWidth(innerColumn) {
    const innerColumnWidth = innerColumn.getBoundingClientRect().width;

    



    const innerColumnRounded = Math.floor(innerColumnWidth);
    console.log("innercolumn width: " + innerColumnRounded);
    //this is an object, dummy
    return {
        innerColumnWidth: innerColumnRounded,
    };
}

function setRange(size, innerColumn) {
    size.max = getWidth(innerColumn).innerColumnWidth;
    //min sie must be 340 or it breaks?
    if (window.innerWidth < 340) {
        size.min = 0;
    } else {
        size.min = 340;
    }
}

function resize(size, label, screen) {
    const width = size.value;
    label.innerHTML = width;
    screen.style.width = width + "px";
    console.log("slider value: "  + width);
}

function addEventListeners(innerColumn, screen, label, size) {
    window.addEventListener("resize", function () {
        setRange(size, innerColumn);
        resize(size, label, screen);
    });

    size.addEventListener("input", function () {
        setRange(size, innerColumn);
        resize(size, label, screen);
    });
}

function resizeAllScreens() {
    layouts.forEach(function (layout) {
        const innerColumn = layout.querySelector(".layouts .inner-column");
        const screen = layout.querySelector("resizer");
        const size = layout.querySelector(".size");
        const label = layout.querySelector(".layout-controls span");
        

            function initialize() {
                getWidth(innerColumn);
                setRange(size, innerColumn);
                resize(size, label, screen);
                addEventListeners(innerColumn, screen, label, size);
            }
            
            initialize();


            

        
        

        
    });
}

resizeAllScreens();


// lazy loading imgs and video

document.addEventListener("DOMContentLoaded", function() {
    const lazyElements = document.querySelectorAll('img, video');

    function lazyLoad(target) {
        const io = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    if (element.tagName === 'IMG') {
                        const src = element.getAttribute('src');
                        console.log(src);
                        element.setAttribute('src', src);
                    } else if (element.tagName === 'VIDEO') {
                        element.load();
                    }
                    observer.disconnect();
                }
            });
        });

        io.observe(target);
    }

    lazyElements.forEach(function(element) {
        lazyLoad(element);
    });
});













// const computedStyle = window.getComputedStyle(innerColumn);
    // const innerColumnPadding = parseFloat(computedStyle.paddingLeft) + parseFloat(computedStyle.paddingRight);

    // console.log(innerColumnPadding);

    // const innerColumnSize = innerColumnWidth - innerColumnPadding;




