$(document).ready(function(){
  
  // Get the modal
  var modal = document.getElementById("itemModal");

  // Get the button that opens the modal
  var btn = document.getElementById("itemBtn");

  //  Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  var body = document.body;

  // When the user clicks on the button, open the modal 
  btn.onclick = function() {
      modal.style.display = "block";
      body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
      body.style.backgroundColor = "#ffffff";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
          body.style.backgroundColor = "#ffffff";
      }
  }

});
