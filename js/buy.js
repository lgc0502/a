var x=0;
$(document).ready(function(){
  
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    x++;
    if(x==1){
      modal.style.display = "block";
      //document.getElementById(btn).innerHtml="洽談中...";
      document.getElementById("myBtn").value="洽談中";
    }
    if(x==2){
      document.getElementById("myBtn").value="已完成";
    }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
});
function myFunction() {
    var popup = document.getElementById('myPopup');
    popup.classList.toggle('show');
}
