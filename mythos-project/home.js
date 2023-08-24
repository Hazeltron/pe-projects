//prompt joke at the begining of opening page
var doSomething = prompt("Have you heard about the Great Saviors?");
var names = ["yes", "no"];
  if (doSomething === names[0]) {
    alert("Welcome, brother.")
  }else {
    alert("You must.")
  }

///babiesmodal1
function openingModal1() {
  var modalButton = document.querySelector('#modal1');
  var modalBox = document.querySelector('#mymodal1');
  document.querySelector('#mymodal1').removeAttribute('hidden');
  document.querySelector('#mymodal1').style.color = 'black';
  document.querySelector('#mymodal1').style.display = 'block';
}
openingModal1();

function closeModal1() {
  var closeButton = document.querySelector('#close');
  document.querySelector('#mymodal1').style.display = 'none';
}
  closeModal1();

//babiesmodal2
  function openingModal2() {
    var modalButton = document.querySelector('#modal2');
    var modalBox = document.querySelector('#mymodal2');
    document.querySelector('#mymodal2').removeAttribute('hidden');
    document.querySelector('#mymodal2').style.color = 'black';
    document.querySelector('#mymodal2').style.display = 'block';
  }
  openingModal2();

  function closeModal2() {
    var closeButton = document.querySelector('#close');
    document.querySelector('#mymodal2').style.display = 'none';
  }
    closeModal2();

//babiesmodal3
    function openingModal3() {
      var modalButton = document.querySelector('#modal3');
      var modalBox = document.querySelector('#mymodal3');
      document.querySelector('#mymodal3').removeAttribute('hidden');
      document.querySelector('#mymodal3').style.color = 'black';
      document.querySelector('#mymodal3').style.display = 'block';
    }
    openingModal3();

    function closeModal3() {
      var closeButton = document.querySelector('#close');
      document.querySelector('#mymodal3').style.display = 'none';
    }
      closeModal3();


      //babiesmodal4
          function openingModal4() {
            var modalButton = document.querySelector('#modal4');
            var modalBox = document.querySelector('#mymodal4');
            document.querySelector('#mymodal4').removeAttribute('hidden');
            document.querySelector('#mymodal4').style.color = 'black';
            document.querySelector('#mymodal4').style.display = 'block';
          }
          openingModal4();

          function closeModal4() {
            var closeButton = document.querySelector('#close');
            document.querySelector('#mymodal4').style.display = 'none';
          }
            closeModal4();
