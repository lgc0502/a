
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
     <div style="height=1000px;background-color:white"><!--<img src="http://imgur.com/WhiGb50.png" style="width:1520px;height:150px">-->
     <center>
     <br><br><br><br>
     <a id="home"href="showItem.php">Home</a>
     <a id="upload"href="test2.php">Upload</a>
     <a id="list"href="showItem2.php">My List</a>
    <a id="us"href="index_team.php">Contact US</a>
     <br><br><br><br>
     <img class="logo2"src="http://imgur.com/HPtTFUN.png" style="height:105px">
     </center></div>
     <img class="picture"src="http://imgur.com/kZRbtbu.png" style="width:1520px">
    <div class=container>
 


		<div id="main">
    <div id="loginbtn">
   <!--login button-->
      <?php
      session_start();
      if(isset($_SESSION['UserName'])){
      echo $_SESSION['UserName'].",HI!";
      }
      ?>
      <div id="stage"></div>
      <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false" scope = "public_profile,email" onlogin = "checkLoginState();"  ></div>
      <form class="logOut" method="post" action="showItem.php"  style="display: none">
          <input type="hidden" value="true" name="logOut">
          <input type="submit" value="登出" >
      </form>

      <?php

      if (isset($_POST['logOut'])){
          $token = $_SESSION["AccessToken"];
          if($token)
          {
              $graph_url = "https://graph.facebook.com/me/permissions?method=delete&access_token=".$token;
              $result = json_decode(file_get_contents($graph_url));
              session_destroy();
              header('Location:showItem.php');

          } else{

          }
      }
      if(isset($_SESSION['UserName'])){
          echo "<script type='text/javascript'>$('.logOut').css('display','block');</script>";
          echo "<script type='text/javascript'>$('.fb-login-button').css('display','none');</script>";
      }
      ?>

      <!--show fb login status-->
       

        	<!--<div class=jumbotron>
          	  <h1></h1>
            	<p class=lead>For LGC design</p>
            	<p><a class="btn btn-lg btn-success" href=# role=button>Get started today</a></p>
        	</div>-->
<!--facebook login block--></div>
<script>
    // This is called with the results from from FB.getLoginStatus().
    var getInfo = new Array();
    var response1;
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        getInfo[0] = response.authResponse.accessToken;
        response1=response;
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();

        } else if (response.status === 'not_authorized') {
            alert('not auth!');
            // The person is logged into Facebook, but not your app.
        } else {
            alert('3');
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
        }

    }
    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });
    }
    window.fbAsyncInit = function () {
        FB.init({
            appId: '687068884782423',
            status: true, // check login status
            cookie: true,  // enable cookies to allow the server to access
                           // the session
            xfbml: true,  // parse social plugins on this page
            version: 'v2.8' // use graph api version 2.8
        });

    };

(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me?fields=id,name,email', function (response) {
            console.log('Successful login for: ' + response.name);
            console.log('Email: ' + response.email);
            console.log(response);
            getInfo[1] = response.id;
            getInfo[2] = response.name;
            getInfo[3]= response.email;
            showHint();
            $('.logOut').css('display','block');
            $('.fb-login-button').css('display','none');
        });
    }
    function showHint() {
        if (typeof getInfo[0]=='undefined') {// no input access token
            document.getElementById("txtHint").innerHTML = " ";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("stage").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "getInfo.php?UserName=" +getInfo[2]+"&UserID="+getInfo[1]+"&UserMail="+getInfo[3]+"&AccessToken="+getInfo[0], true);
            xmlhttp.send();

        }
    }


  </script>

<!--end of facebook login block-->

            <?php
            include 'mysql_config.php';
            $conn = new mysqli($servername, $username, $password, $dbname);
            $result=$conn->query("select * from commodity ");
            $i=1;
            while ($row=$result->fetch_assoc()){
                if ($i==1){
                    echo "<div class=row>";
                }
                        echo "<div class=col-lg-4>><h2>".$row['ItemName']."</h2>
                    <center>    <img  height=\"200\" width=\"200\" src=\"".$row['ImgUrl']."\"></center>
                    
                    <button  class=\"itemBtn btn btn-default\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span></button>


                    <div  class=\"modal\">
                          <!-- Modal content -->
                          <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                  <span class=\"close\">×</span>
                                  <h2><button class=\"ui yellow like button\">Exchange</button></h2>
                                  <h3 style='display:none'>".$row['OwnedBy']."</h3>
                                 <h4 style='display:none'>".$row['ItemNO']."</h4>
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
             <!-- <footer class=footer>
                <p>&copy; Company 2014</footer>--></div>

<br><br>
<div id="footer" style="height:150px;background-color:white">
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


