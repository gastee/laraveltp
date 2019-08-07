// var btn = document.querySelector('button');
// btn.onclick = function (event) {
// alert('Hi there!');
// }

$('#donate_modal').on('submit', function(e){
  $('#donate_modal').modal('show');
  e.preventDefault();
});
