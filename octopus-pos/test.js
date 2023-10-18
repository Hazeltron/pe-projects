import{double, timesEight} from './library.js';

const outlet = document.querySelector('body');
outlet.innerHTML = double(5) - timesEight(2);