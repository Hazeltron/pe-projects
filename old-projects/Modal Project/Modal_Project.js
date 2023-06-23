function openingModal() {
  var modalButton = document.querySelector('#modal');
  console.log(modalButton);

  var modalBox = document.querySelector('#mymodal');
  console.log(modalBox);

  document.body.style.backgroundColor = 'grey';
  document.body.style.color = 'white';
  document.querySelector('#mymodal').removeAttribute('hidden');
  document.querySelector('#mymodal').style.backgroundColor = 'lightblue';
  document.querySelector('#mymodal').style.color = 'black';
  document.querySelector('#mymodal').style.padding = '100px';
  document.querySelector('#mymodal').style.display = 'block';
}
openingModal();

function closeModal() {
  var closeButton = document.querySelector('#close');
  console.log(closeButton);

  document.querySelector('#mymodal').style.display = 'none';
  document.body.style.backgroundColor = 'white';
  document.body.style.color = 'black';
}
  closeModal();
