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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-3.1.1.js" ></script>
  <script src="js/jQery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/index_2.js"></script>
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">1515</a>
    <a href="index_1.php">Our Team</a>
    <a href="index_2.php">新增物品</a>
    <a>Q and A</a>
  </div>
  <span class="opennav" onclick="openNav()"> &#9776;</span>
</body>
<br><br><br><br><br><br>

<div class="row" id="main">
  <div class="col-xs-2">
  排版用欄位
  </div>
  <div class="col-xs-7 frame">
    <br>
    <form method="post" action="index_2.php" role="form" class="form-horizontal">
      <div class="form-group row ItemName ">
        <label for="ItemName" class="col-xs-2 col-form-label">商品名稱</label><br>
        <div class="col-xs-10">
          <input class="form-control " type="text" placeholder="請輸入商品名稱" name="ItemName" id="ItemName" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-xs-2 col-form-label" for="ItemCategory" >商品類別</label><br>
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
        <label for="ItemInfo" >商品說明</label>
        <textarea class="form-control" id="ItemInfo" name="ItemInfo" rows="4"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" id="send">Submit</button><br><br>
    </form>
    <?php
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
          $conn->query ("INSERT INTO commodity (ItemName,ItemCategory,ImgUrl,ItemInfo) VALUES ('".$_POST['ItemName']."','".$_POST['ItemCategory']."','".$_POST['ImgUrl']."','".$_POST['ItemInfo']."')");

      }
    $result=$conn->query("select * from commodity ");
    $row=$result->fetch_assoc();
    echo "<table>";
    while($row=$result->fetch_assoc()){
        echo '<tr><td>'.$row['ItemName'].'</td><td>'.$row['ItemInfo'].'</td><td>'.$row['PostTime'].'</td></tr>';
    }
    echo "</table>";
    ?>
  </div>
  <div class="col-xs-3">
    爽放廣告的地方!讚
  </div>
</div>
</html>

