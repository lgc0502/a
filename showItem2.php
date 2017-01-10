<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/12/4
 * Time: 下午 07:37
 */
session_start();
if (!isset($_SESSION['UserID'])){
    echo "<script>alert(\"Please login!\");window.location = \"index.php\";</script>";
}
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jQery.js"></script>
    <script src="js/showItem.js"></script>
    <script src="js/modal.js"></script>
    <script src="https://use.fontawesome.com/488b28b092.js"></script>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">home</a>
        <a href="index_team.php">Our Team</a>
        <a href="index_2.php">Exchange Now</a>
        <a href="#">ItemCatalog</a>
    </div>
    <span class="opennav" onclick="openNav()"> &#9776;</span>

    <div class=container>
        <div class="masthead">
            <h3 class="text-muted">Project name</h3>
            <nav>
                <ul class="nav nav-justified">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">日用品</a></li>
                    <li><a href="#">書籍</a></li>
                    <li><a href="#">食品</a></li>
                    <li><a href="#">其他</a></li>
                </ul>
            </nav>
        </div>


		<div id="main">
    	<div class=container>
        	<div class=jumbotron>
          	  <h1></h1>
            	<p class=lead>For LGC design</p>
            	<p><a class="btn btn-lg btn-success" href=# role=button>Get started today</a></p>
        	</div>
            <?php
            include 'mysql_config.php';
            $conn = new mysqli($servername, $username, $password, $dbname);
           $aaa =$_SESSION['UserID'];
            $result=$conn->query("SELECT a.* FROM `commodity` as a, `wantList` as b  where b.OwnID=".$aaa." and a.OwnedBy=b.wantID GROUP BY ItemNo ");
            $i=1;
            while ($row=$result->fetch_assoc()){
                if ($i==1){
                    echo "<div class=row>";
                }
                        echo "<div class=col-lg-4><h2>".$row['ItemName']."</h2>
                        <img class=\"OuterImg\"  height=\"150\" width=\"150\" src=\"".$row['ImgUrl']."\">
                    
                    <button  class=\"itemBtn btn btn-default\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>  View details &raquo;</button>
                    <div  class=\"modal\">
                          <!-- Modal content -->
                          <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                  <span class=\"close\">×</span>
                                  <h2><button class=\"ui yellow like button\">Exchange</button></h2>
                                  <h3 style='display:none'>".$row['OwnedBy']."</h3>
                              </div>
                              <div class=\"modal-body\">
                                  <p class='ItemHead'>".$row['ItemName']."</p><p>".$row['ItemInfo']."</p>
                                  <img height=\"300\" width=\"300\" class=\"InnerImg\" src=\"".$row['ImgUrl']."\"></div>
                              <div class=\"modal-footer\"></div></div></div></div>";

                if ($i==3){
                    echo "</div>";
                    $i=1;
                }
                else{
                    $i++;
                }

            }
            if($i!=3){
                echo "</div>";
            }
            ?>
            <!--  <footer class=footer>
                <p>&copy; Company 2014</footer>-->
</body>
<body>
<br><br><br><br><br><br><br><br>
<div id="footer" style="height:150px;background-color:white">
<br><br><br><br>
<br><center><a href="https://www.facebook.com/go1515/?fref=ts"><img src="http://imgur.com/hRMl3h5.png"style="weight:45px;height:45px">
<img src="http://imgur.com/X4Qp67I.jpg" style="weight:52px;height:52px">
<br>
<a href="showItem.php">Home&nbsp&nbsp||&nbsp&nbsp</a>
<a href="test2.php" >Upload&nbsp&nbsp||&nbsp&nbsp</a>
<a href="showItem2.php">My&nbspList&nbsp&nbsp||&nbsp&nbsp</a>
<a href="index_team.php">Contact&nbspUs</a>
<p>phone:06-1515151&nbspemail:1515@gmail.com
<br>
Company@2016&nbsp&nbspCreate a platform for you to exchange things</p>
</center></div>
                

</body>
</html>


