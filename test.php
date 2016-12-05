<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>以物易物</title>
        <link rel="stylesheet" href="css/sliedNav.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/bootstrap-theme.min.css">
                    <link rel="stylesheet" href="css/showItem.css">
<link href=css/justified-nav.css rel=stylesheet>
</head>

<body style="margin=0;padding=o;">

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">�</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    document.body.style.backgroundColor = "#ffffff";
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        document.body.style.backgroundColor = "#ffffff";
    }
}
</script>

</body>
</html>


