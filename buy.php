<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Made with Thimble</title>
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/buy.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jQery.js"></script>
  <script src="js/script-3.js"></script>
  <script src="js/buy.js"></script>
  <script src="https://use.fontawesome.com/488b28b092.js"></script>
  <link rel="stylesheet" type="text/css" href="Semantic-UI/dist/semantic.min.css">
  <script src="Semantic-UI/dist/semantic.min.js"></script>
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">1515</a>
    <a href="index_2.php">新增物品</a>
    <a href="index_1.php">Our Team</a>
  </div>
  <span class="opennav" onclick="openNav()"> &#9776;</span>
  
  <div class="title">
    <center><img src="http://imgur.com/AYasZv9.jpg" width=500px height=150px></center>
  </div>
  <div class="id">
  <br><br><br><br><br><h2>  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; HERE IS NAME &nbsp;
 <div class="dropdown">
  <button class="dropbtn">status</button>
  <div class="dropdown-content">
    <a href="#ing">交易中</a>
    <a href="#discussing">洽談中</a>
    <a href="#finish">已完成</a>
  </div>

 </div>
  <br><hr size="5" align="center" noshade width="90%" color="991C">
  </div>
  <div name="ing" class="text" id="ing">
    交易中
  </div>
  <!--<div class="picure" id="ping">
  <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Fast_food_meal.jpg">
  </div>-->
  
  <div class="popup" onclick="myFunction()"> 
    <div id="picture"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Fast_food_meal.jpg" style="float: left ; margin: 15px"></div>
    <span class="popuptext" id="myPopup">Popup text...</span>
    </div>
     <div id="picture"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Fast_food_meal.jpg" style="float: left ; margin: 15px"></div>
	 <!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <p>Some text in the Modal..</p>
  </div>

</div> 
  <div name="discussing" class="text" id="discussing" >
    洽談中
  </div>
	<div name="finish" class="text" id="finish" >
    結束交易
  </div>

</body>
</html>

