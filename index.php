<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>以物易物</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slide.css">
  <link rel="stylesheet" href="css/sidenave.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jQery.js"></script>
  <script src="js/script-3.js"></script>     
  <script src="https://use.fontawesome.com/488b28b092.js"></script>

</head>

<body onload="showHint()">
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">home</a>
    <a href="index_team.php">Our Team</a>
    <a href="index_2.php">Exchange Now</a>
      <a href="showItem.php">ItemCatalog</a>
  </div>
  <span class="opennav" onclick="openNav()"> &#9776;</span>

  </div>
  <span class="opennav" onclick="openNav()"> &#9776;</span>
  <div id="main">
    <div id="logo">
    <img src="http://imgur.com/HPtTFUN.png" width="300px" height="150px"/>
    </div>
  
 <!--login button-->
      <?php
      session_start();
      if(isset($_SESSION['UserName'])){
      echo $_SESSION['UserName'].",HI!";
      }
      ?>
      <div id="stage"></div>
      <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false" scope = "public_profile,email" onlogin = "checkLoginState();"  ></div>
      <form class="logOut" method="post" action="index.php"  style="display: none">
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
              header('Location:index.php');

          } else{

          }
      }
      if(isset($_SESSION['UserName'])){
          echo "<script type='text/javascript'>$('.logOut').css('display','block');</script>";
          echo "<script type='text/javascript'>$('.fb-login-button').css('display','none');</script>";
      }
      ?>

      <!--show fb login status-->

	<!---->
<div id="main">  
 <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="http://imgur.com/y4oM3Lo.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="http://imgur.com/kQvREop.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="http://imgur.com/Cdoo5lS.jpg" style="width:100%">
    <div class="text"></div>
  </div>
  <script>
  currentSlide(1);
  </script>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> </div>
<!--facebook login block-->
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
    // Load the SDK asynchronously
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



</body>

</html>

