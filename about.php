<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpaceX</title>
  <link rel="icon" type="icon/png" href="images/logo.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="navbar  navbar-fixed-top">
    <div class="container">
      	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          		<span class="icon-bar"></span>
          		<span class="icon-bar"></span>
          		<span class="icon-bar"></span>
        	</button>
          <img class="navbar-logo" src="images/spacex.png">
        <a class="navbar-brand" href="#">SpaceX</a>
      </div>
      <div class="navbar-collapse collapse">
       			<ul class="nav navbar-nav navbar-right">
					<li class="active"><a id="menuli" href="index.html"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Главная</a></li>
					<li><a id="menuli" href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;Новости</a></li>
					<li><a id="menuli" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Статьи</a></li>
					<li><a id="menuli" href="#"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Авторы</a></li>
          <li><a id="menuli" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;О проекте</a></li>
				</ul>
			</div>
      </div>
    </div>

  <div id="headerwrap">
  	<div class="container">
  	<div class="row lefted">
  		<h1>Some things we forget, and some things we can never forget.</h1>
  		<h2>S.H. 2</h2>
  	</div>
  	</div>
  	</div>
  	</div>
  	
  <div>
    
<!--  <img src="images/Elon_Musk_2015.jpg" id="elon" width="100px" height="300px"> -->

  </div>

  	<div class="container w">
  		<div class="row centered">
  			<h4 id="topnews">О проекте</h4>
  			<br><br>
  			<div>
  			 <?php
            
              
                $connection = mysqli_connect( 'localhost', 'root', '', 'database');

                  //or die("Ошибка " . mysqli_connect_error($connection));
                 
                 if ($connection == false) {

                  echo "<br><br> Connection failed! <br><br>";
                  echo mysqli_connect_error();
                  exit();

                 }else  {
                  echo "Connection success!";
                 }


                 $result1 = mysqli_query($connection, "SELECT * FROM `about` ");

            ?>

            <?php

                 while ( ($infout = mysqli_fetch_assoc($result1)) ) {
                  echo ('<p>' . $infout['info'] . $infout['text'] . '</p>');
                 } 
                 ?>
  	     </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="scripts/bootstrap.min.js"></script>
  <script src="scripts/header.js" type="text/javascript" ></script>
  <script src="scripts/slider.js" type="text/javascript"></script> 

</body>

</html>