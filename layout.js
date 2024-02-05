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

function displayContent(content) {
    if (content.style.display !== 'block') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
}

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

function toggleBorder(layout) {
    if (layout.classList.contains('bordered')) {
        layout.classList.remove('bordered');
    } else {
        layout.classList.add('bordered');
    }
}

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


//h2 to a different word for every section 


// function changeH2(section){
//     //look in section find h2 
//     const h2 = section.querySelector("h2");
//     //change it to something
//     h2.innerHTML = "something";
// }



// function changeAllH2(){
//     const sections = document.querySelectorAll("section")
//     Array.from(sections).forEach( functon(section) {
//         changeH2(section);
//     });
// }

// function initialize(){
//     changeAllH2();
// }

// initialize();



// function getWidth(innerColumn) {
//     const innerColumnWidth = innerColumn.getBoundingClientRect().width;

    



//     const innerColumnRounded = Math.floor(innerColumnWidth);
//     console.log("innercolumn width: " + innerColumnRounded);
//     //this is an object, dummy
//     return {
//         innerColumnWidth: innerColumnRounded,
//     };
// }

// function setRange(size, innerColumn) {
//     size.max = getWidth(innerColumn).innerColumnWidth;
//     //min sie must be 340 or it breaks?
//     if (window.innerWidth < 340) {
//         size.min = 0;
//     } else {
//         size.min = 340;
//     }
// }

// function resize(size, label, screen) {
//     const width = size.value;
//     label.innerHTML = width;
//     screen.style.width = width + "px";
//     console.log("slider value: "  + width);
// }

// function addEventListeners(innerColumn, screen, label, size) {
//     window.addEventListener("resize", function () {
//         setRange(size, innerColumn);
//         resize(size, label, screen);
//     });

//     size.addEventListener("input", function () {
//         setRange(size, innerColumn);
//         resize(size, label, screen);
//     });
// }

// function resizeAllScreens() {
//     layouts.forEach(function (layout) {
//         const innerColumn = layout.querySelector(".layouts .inner-column");
//         const screen = layout.querySelector("resizer");
//         const size = layout.querySelector(".size");
//         const label = layout.querySelector(".layout-controls span");
        

//             function initialize() {
//                 getWidth(innerColumn);
//                 setRange(size, innerColumn);
//                 resize(size, label, screen);
//                 addEventListeners(innerColumn, screen, label, size);
//             }
            
//             initialize();


            

        
        

        
//     });
// }

// resizeAllScreens();













// const computedStyle = window.getComputedStyle(innerColumn);
    // const innerColumnPadding = parseFloat(computedStyle.paddingLeft) + parseFloat(computedStyle.paddingRight);

    // console.log(innerColumnPadding);

    // const innerColumnSize = innerColumnWidth - innerColumnPadding;




