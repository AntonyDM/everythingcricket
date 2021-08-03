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




	<div class="general">
	
	<h2>LIVE CRICKET SCORES</h2>
	
	<!-- Live score embeded -->
	<div id="score-frame" class="live"><a rel="nofollow" href="https://www.crictimes.org/cricket-scores">Live Cricket Scores</a></div>
		<script type="text/javascript">var params={a: '27c241',c: '000000',bo: '009039',b: '00aa44',tc: 'ffffff',sb: 'ffffff',ti: 'ffffff',},query = new URLSearchParams(params).toString(),html = document.getElementById('score-frame');html.innerHTML = '<iframe src="https://cwidget.crictimes.org/?'+query+'" style="width:100%;min-height: 460px;" frameborder="0" scrolling="yes"></iframe>';</script>
	





<?php require("footer.php"); ?>
</body>
</html>