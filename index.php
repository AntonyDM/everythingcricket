<?php
	require("sessionCheck.php");
?>


<html>
<head>
	<title>Everything Cricket</title>
	<link rel="stylesheet" href="css/everythingcricket.css">
	<link rel="icon" href="img/marnus.png">
	<link href='https://fonts.googleapis.com/css?family=Secular One' rel='stylesheet'>
</head>
<body>


	
<?php require("nav.php"); ?>
<?php require("videos.php"); ?>


 <!-- MP3 of world wide of sports theme song -->
<div class="worldwideofsports">
	<h2>CRICKET'S WORLD WIDE OF SPORTS THEME SONG</h2>
	<img src="img/worldwideofsportsimg.png" alt="Cricket's World Wide of Sports" width= "100px" height="64px">
	
	<audio controls >
		<source src="audio/worldwideofsportsogg.ogg" type="audio/ogg">
		<source src="audio/worldwideofsports.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>
</div>
	
	
<!-- MP4 of Marnus -->	
<div class="marnusvideo">
	<h2>MARNUS GETS CHIRPY WITH SHORT LEG CHAT</h2>
	<video width="700" height="393" controls>
	  <source src="video/marnussledging.mp4" type="video/mp4">
	  <source src="video/marnussledging.ogg" type="video/ogg">
	Your browser does not support the video tag.
	</video>

</div>



<?php require("footer.php"); ?>
</body>
</html>