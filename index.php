<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>以物易物</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jQery.js"></script>
  <script src="js/script-3.js"></script>     
  <script src="https://use.fontawesome.com/488b28b092.js"></script>
  <link rel="stylesheet" type="text/css" href="Semantic-UI/dist/semantic.min.css">
  <script src="Semantic-UI/dist/semantic.min.js"></script>
</head>

<body>
  
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">home</a>
    <a href="index_1.php">Our Team</a>
    <a href="index_2.php">exchange now</a>
    <a>Q and A</a>
  </div>
  <div id="logo">
    <img src="http://imgur.com/HPtTFUN.png" />
  </div>
    
 <!--login button-->	

	<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true" scope = "public_profile,email" onlogin = "checkLoginState();"></div>	

	<!--show fb login status-->
	<div id="status">
	</div>
	<!---->


    <div class="blueberry">
      <ul class="slides">
        <li><img src="http://marktyrrell.com/labs/blueberry/img/slide3.jpg" /></li>
        <li><img src="http://marktyrrell.com/labs/blueberry/img/slide4.jpg" /></li>
      </ul>
    </div> 
    <span class="opennav" onclick="openNav()"> &#9776;</span>
  </div>

  <footer id="main">
      <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
      <i class="fa fa-instagram fa-2x" aria-hidden="true"></i><br><br><br>
       Copyright © 2016年 1515Team. All rights reserved.
  </footer>
  <div id="abgne_float_ad" >
  </div>



<!--facebook login block-->
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into RE1515.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '687068884782423',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Welcome, ' + response.name + '!';
    });
  }
</script>
<!--end of facebook login block-->


</body>

</html>

