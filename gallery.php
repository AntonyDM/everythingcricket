<?php
	require("sessionCheck.php")

?>

<html>
<head>
	<title>Everything Cricket</title>
	
	<link rel="stylesheet" href="css/everythingcricket.css">
	<link rel="icon" href="img/marnus.png">
	<link href='https://fonts.googleapis.com/css?family=Secular One' rel='stylesheet'>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  
  </style>
  
  
</head>
<?php require("nav.php"); ?>
<body>


<div class="general">

<div class="containergal">
  <h2>IMAGE GALLERY</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
	  
  </ul>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/smith.JPG" alt="Steve Smith" style="width:100%" onclick="imgDisplay(this)";>
		
        <div class="carousel-caption">
          <h3>Steve Smith</h3>
          <p>142, Edgebaston</p>
		
        </div>
      </div>

	  <div class="item">
			<img src="img/hazlewood.jpg" alt="Josh Hazelwood" style="width:100%;">
			<div class="carousel-caption">
			  <h3>Josh Hazlewood</h3>
			  <p>5/8, Adelaide</p>
			</div>
		  </div>

      <div class="item">
        <img src="img/marnus.jpg" alt="Marnus Labuschagne" style="width:100%;">
        <div class="carousel-caption">
          <h3>Marnus Labuschagne</h3>
          <p>185, Brisbane</p>
        </div>
      </div>
	  
	  <div class="item">
        <img src="img/lyon.jpg" alt="Nathan Lyon" style="width:100%;">
        <div class="carousel-caption">
          <h3>Nathan Lyon</h3>
          <p>6/49, Edgebaston</p>
        </div>
      </div>
	  
	   <div class="item">
        <img src="img/travis.jpg" alt="Travis Head" style="width:100%;">
        <div class="carousel-caption">
          <h3>Travis Head</h3>
          <p>114, Melebourne</p>
        </div>
      </div>
	  
	   <div class="item">
        <img src="img/cummins.jpg" alt="Pat Cummins" style="width:100%;">
        <div class="carousel-caption">
          <h3>Pat Cummins</h3>
          <p>6/27, Melebourne</p>
        </div>
      </div>
    
    
  
    </div>

   <!-- Left and right controls -->
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
   
  </div>
</div>
</div>

<?php require("footer.php"); ?>
</body>
</html>