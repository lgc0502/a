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
  <link rel="stylesheet" type="text/css" href="Semantic-UI/dist/semantic.min.css">
  <script src="Semantic-UI/dist/semantic.min.js"></script>
</head>

<body style="margin=0;padding=o;">

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModalFrame" class="modalFrame">
<div id="myModal" class="modal">

	<!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <div class="close">&times;</div>
      <h2>大崛彩     的羽球拍</h2>
    </div>
    <div class="modal-body">
      <modalImage>
      <img src="http://cdn-ak.f.st-hatena.com/images/fotolife/H/HRHM/20140527/20140527194511.jpg">
      </modalImage>

      <modalText>
        <p>Some text in the Modal Body</p>
        <p>Some other text...</p>
      </modalText>
    </div>
    <div class="modal-footer">
      <h3>Item Owner
        <a href="http://myidp.sso2.ncku.edu.tw/nidp/idff/sso?id=3&sid=2&option=credential&sid=2"><img src="https://github.com/StanleyHuangEE/wp2016/blob/gh-pages/1515.png?raw=true" height=50px width=50px>
      </h3>
    </div>
  </div>
</div>
</div>

<script>
// Get the modal
var modalFrame = document.getElementById('myModalFrame');
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
    modalFrame.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    modalFrame.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalFrame) {
        modal.style.display = "none";
        modalFrame.style.display = "none";
    }
}
</script>
</body>
</html>


