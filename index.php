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
  <script>
  $(window).load(function() {
    $('.blueberry').blueberry();
    });
  </script>
</head>

<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">1515</a>
    <a href="index_1.php">Our Team</a>
    <a href="index_2.php">新增物品</a>
    <a>Q and A</a>
  </div>
  <div id="main">
    <div class="small" id="top">
    </div>
    	<h1 id="tt"><p>Exchange</p></h1>
    	<img id="search" src="http://www.century21.com.tw/mobile/images/menu/menu_search_page.png">
    	<input id="search-box" type="text" name="search-box" />
 
    <div class="blueberry">
      <ul class="slides">
        <li><img src="http://marktyrrell.com/labs/blueberry/img/slide3.jpg" /></li>
        <li><img src="http://marktyrrell.com/labs/blueberry/img/slide4.jpg" /></li>
      </ul>
    </div> 
    <span class="opennav" onclick="openNav()"> &#9776;</span>
  </div>

  <footer id="main">
      Copyright © 2016年 1515Team. All rights reserved.
  </footer>
</body>

</html>
