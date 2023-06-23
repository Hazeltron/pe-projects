let timer = null;
let countDownNumber = 10;
let changeState = function(state) {
  document.body.className = "body-state" + state;
  clearInterval(timer);
  countDownNumber = 10;
  document.getElementById("countDown").innerHTML = countDownNumber;
if (state === 2) {
  timer = setInterval (function () {
    countDownNumber = countDownNumber - 1;
    document.getElementById("countDown").innerHTML = countDownNumber;
  if (countDownNumber <= 0) {
  changeState(3);
      };
    }, 500);
  }else if (state === 3) {
    let success = setTimeout(function() {
      let randomNumber = Math.round(Math.random()*10);
        console.log("randomNumber:", randomNumber);
        if (randomNumber > 5) {
        changeState(4);
          }else {
        changeState(5);
              }
    }, 2000);
  };
}
