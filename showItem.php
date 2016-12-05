<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/12/4
 * Time: 下午 07:37
 */
session_start();
if(isset($_SESSION['UserID'])){
    echo $_SESSION['UserID'];
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
    <script src="https://use.fontawesome.com/488b28b092.js"></script>
    <link rel="stylesheet" type="text/css" href="Semantic-UI/dist/semantic.min.css">
    <script src="Semantic-UI/dist/semantic.min.js"></script>
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
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">C                         ontact</a></li>
                </ul>
            </nav>
        </div>


		<div id="main">
    	<div class=container>
        	<div class="masthead">
          	  <h3 class="text-muted">Project name</h3>
           	 <nav>
            	    <ul class="nav nav-justified">
              	      <li class="active"><a href="#">Home</a></li>
                	    <li><a href="#">Projects</a></li>
                  	  <li><a href="#">Services</a></li>
                   		<li><a href="#">Downloads</a></li>
                    	<li><a href="#">About</a></li>
                    	<li><a href="#">Contact</a></li>
                	</ul>
            	</nav>
        	</div>

        	<div class=jumbotron>
          	  <h1>Marketing stuff!</h1>
            	<p class=lead>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.
            	<p><a class="btn btn-lg btn-success" href=# role=button>Get started today</a>
        	</div>
        	<div class=row>
            	<div class=col-lg-4>
                	<h2>Safari bug warning!</h2>
                	<p class=text-danger>As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.
                	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                	<p><a class="btn btn-primary" href=# role=button>View details &raquo;</a>
            	</div>
            	<div class=col-lg-4>
                	<h2>Heading</h2>
                	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                	<p><a class="btn btn-primary" href=# role=button>View details &raquo;</a>
            	</div>
            	<div class=col-lg-4>
                	<h2>Heading</h2>
                	<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
                	<p><a class="btn btn-primary" href=# role=button>View details &raquo;</a>
            	</div>
        	</div>
       		<div class=row>
            	<div class=col-lg-4>
                	<h2>Safari bug warning!</h2>
                	<p class=text-danger>As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.
                	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                	<p><a class="btn btn-primary" href=# role=button>View details &raquo;</a>
            	</div>
            	<div class=col-lg-4>
                	<h2>Heading</h2>
                	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                	<p><a class="btn btn-primary" href=# role=button>View details &raquo;</a>
            	</div>
            	<div class=col-lg-4>
                	<h2>Heading</h2>
                	<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
            	    
                  <button class="ui inverted red button" id="itemBtn">View details &raquo;</button>
                  
                  <div id="itemModal" class="modal">
                      <!-- Modal content -->
                      <div class="modal-content">
                          <div class="modal-header">
                              <span class="close">×</span>
                              <h2>StanleyHuang ‣ Yonex Duora10 lcw <button class="ui yellow button">Exchange</button></h2>
                          </div>
                          <div class="modal-body">
                              <p>Some text in the Item Body</p>
                              <p>Some other text...</p>
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKo2MWbngJqjrJ3t0eRE73AjZEQ2MtUQW8HUsSa3FFftY1OqvHug">
                          </div>
                          <div class="modal-footer">
                              <h3>Email:stanley850904@gmail.com</h3>
                          </div>
                      </div>
                  </div>
              </div>

        	</div>
            
		</div>
    
              <footer class=footer>
                <p>&copy; Company 2014</footer>
</body>
</html>


