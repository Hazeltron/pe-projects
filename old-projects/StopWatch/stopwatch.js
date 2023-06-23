var hour = 0;
var min = 0;
var sec = 0;
var stopTime = true;

function startTimer() {
  if (stopTime == true) {
    stopTime = false;
    timerCycle();
  }
    }


function stopTimer() {
  if (stopTime == false) {
    stopTime = true;
  }
}

function timerCycle() {
  if (stopTime == false) {
    sec = parseInt(sec);
    min = parseInt(min);
    hour = parseInt(hour);
    sec = sec + 1;
    if (sec === 60) {
      min = min + 1;
      sec = 0;
    }
    if (min === 60) {
      hour = hour + 1;
      min = 0;
      sec = 0;
    }
    if (sec < 10 || sec == 0) {
      sec = '0' + sec;
    }
    if (min < 10 || sec == 0) {
      min = '0' + min;
    }
    if (hour < 10 || sec == 0) {
      hour = '0' + hour;
    }
    stopwatch.innerHTML = hour + ':' + min + ':' + sec;

    setTimeout("timerCycle()", 1000);
  }
}
function resetTimer() {
  stopwatch.innerHTML = '00:00:00';
  if (stopTime === true) {
    hour = 0;
    min = 0;
    sec = 0;
  }
}
