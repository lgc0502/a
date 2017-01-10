<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>物品刊登</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style_itempost.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/test2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/jquery-3.1.1.js" ></script>
<script src="js/jQery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index_2.js"></script>
<script src="https://use.fontawesome.com/488b28b092.js"></script>
<link rel="stylesheet" type="text/css" href="Semantic-UI/dist/semantic.min.css">
<script src="Semantic-UI/dist/semantic.min.js"></script>

<style>
body, html {
    height: 100%;
}

.parallax {
    /* The image used */
    background-image: url('http://imgur.com/FJJ5bLF.jpg');

    font:0.5;
    /* Full height */
    height: 110%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1024px) {
    .parallax {
        background-attachment: scroll;
    }
}
</style>
</head>
<body id="main">
 <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">1515</a>
    <a href="index_team.php">Our Team</a>
    <a href="index_2.php">Exchange Now</a>
    <a>Q and A</a>
  </div>
  <span class="opennav" onclick="openNav()"> &#9776;</span>

<!--<center><img id="logo" src="http://imgur.com/HPtTFUN.jpg"></center>-->


<div class="parallax">
<center><a href="showItem.php"><img id="logo" src="http://imgur.com/HPtTFUN.jpg"></a></center>

</div>

<div id="form" style="height:750px;background-color:white;padding:10px">
 <center><img src="http://imgur.com/fovo8yz.png"></center>
 <br>
<div class="col-xs-7 frame" id="fillform" >
    <br>

 <form method="post" action="test2.php" role="form" class="form-horizontal">
      <div class="form-group row ItemName ">
        <label for="ItemName" class="col-xs-2 col-form-label"><br>商品名稱</label><br>
        <div class="col-xs-10">
          <input class="form-control " type="text" placeholder="請輸入商品名稱" name="ItemName" id="ItemName" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-xs-2 col-form-label" for="ItemCategory" ><br>商品類別</label><br>
        <div class="col-xs-10">
          <select class="form-control" id="ItemCategory" name="ItemCategory">
            <option value="necessities">日用品</option>
            <option value="foods">食物</option>
            <option value="books">書籍或雜誌</option>
            <option value="others">其他</option>
          </select>
        </div>
      </div>
      <div class="form-group row ImgUrl">
        <label  class="col-xs-2 col-form-label" for="ImgUrl">商品圖片連結</label>
        <div class="col-xs-10">
          <input class="form-control" type="url" placeholder="貼上圖片網址" id="ImgUrl" name="ImgUrl" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-xs-2 col-form-label" for="ItemInfo" > 商品說明</label>
         <div class="col-xs-10">
        <textarea class="form-control" id="ItemInfo" name="ItemInfo" rows="4"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" id="send">Submit</button><br><br>
    </form>
   <?php
    session_start();
      include 'mysql_config.php';
      $conn=new mysqli($servername,$username,$password,$dbname);
      if ($conn->connect_errno) {
          echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
      else echo "connect";
      if (!empty($_POST['ItemName'])){
        echo $_POST['ItemName'].'<br>';
        echo $_POST['ItemCategory'].'<br>';
        echo "<img src='".$_POST['ImgUrl']."' height=\"42\" width=\"42\">".'<br>';
          echo $_POST['ItemInfo'].'<br>';
          $conn->query ("INSERT INTO commodity (ItemName,ItemCategory,ImgUrl,ItemInfo,OwnedBy) VALUES ('".$_POST['ItemName']."','".$_POST['ItemCategory']."','".$_POST['ImgUrl']."','".$_POST['ItemInfo']."','".$_SESSION['UserID']."')" );
      }
    ?>
</div>
</div>
<div id="footer" style="height:150px;background-color:black">
<br><center><a href="https://www.facebook.com/go1515/?fref=ts"><img src="http://imgur.com/wYvazdK.png"style="weight:50px;height:50px"></a>
<img src="http://imgur.com/tyCt6SX.jpg" style="weight:45px;height:45px">
<br>
<a href="showItem.php" style="color:white">Home&nbsp&nbsp||&nbsp&nbsp</a>
<a href="test2.php" style="color:white">Upload&nbsp&nbsp||&nbsp&nbsp</a>
<a href="showItem2.php" style="color:white">My&nbspList&nbsp&nbsp||&nbsp&nbsp</a> 
<a href="index_team.php" style="color:white">Contact&nbspUs</a>
<p style="color:white">phone:06-1515151  email:1515@gmail.com
<br>
Company@2016 create a platform for you to exchange things</p>
</center></div>



<!--<div class="parallax"></div>-->

</body>
</html>
