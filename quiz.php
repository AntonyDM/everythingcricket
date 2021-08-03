<?php


	require("sessionCheck.php");


    $message = "";
	$bigquestion = "";
              
    $method = $_SERVER["REQUEST_METHOD"];
              
//Hit the submit button....process answering the quiz 
IF ($method == "POST"){
	
    $correct = 0;
	$max =10;
	$wrong = array();
	$f = "";
	$wrongmessage = "";
	$questionnum = "";
	
			
	
	// Start from Q1 to MAX question and check that the Answer is correct, if it is add 1 to 	total correct
	for ($x = 1; $x <= $max; $x++) {
		if ($_POST["Q".$x] == "T") {
			$correct = $correct + 1;		
		}
		else {
			//Add the question number that you got wrong, $x into the array call $wrong
			array_push($wrong, $x);
			
		}
		
	}
	
		

           
	  IF($correct > 0){
				   $message = "Congratulations you got ".$correct." right out of ".$max;
	  } ELSE {
				   $message = "You failed! Try again";
	  }
	  
	  //for each value in array
	  foreach ($wrong as $f) {
			//add it onto a new string called $questionnum
			$questionnum = $questionnum.$f.",";
		}
		
		//use big question add a sentence and remove the last comma in $questionnum
		$bigquestion = "You got questions ".substr($questionnum,0,-1)." wrong";
	  
	}
	
		
		
				
		
		
		
              

?>



<html>
<head>
	<title>Everything Cricket - Quiz</title>
	<link rel="stylesheet" href="css/everythingcricket.css">
	<link rel="icon" href="img/marnus.png">
	<link href='https://fonts.googleapis.com/css?family=Secular One' rel='stylesheet'>
</head>
<body>



<?php require("nav.php"); ?>


<div class="quizcss">
<main>
	<h1>QUIZ</h1>
	
	<form name="quiz" id="quiz" action="" method="post">
		<table class="quizoption">
		
		<!-- echo score -->
		<tr><td class="quizecho"><?php echo($message);?></td></tr>  <!-- Echo -->
		<!-- echo which questions you got wrong -->
		<tr><td class="quizecho"><?php echo($bigquestion);?></td></tr>  <!-- Echo -->
		
		<div class="qwrong">
		
		
		</div>
		
		<tr><td><h3>Q1.How many Ashes series has Australia won?</h3></td></tr>
		<tr><td><input type="radio" name="Q1" id="Q1A" value="F" required>A. 35</input></td></tr>
		<tr><td><input type="radio" name="Q1" id="Q1B" value="F" required>B. 40</input></td></tr>
		<tr><td><input type="radio" name="Q1" id="Q1C" value="T" required>C. 33</input></td></tr>
		<tr><td><input type="radio" name="Q1" id="Q1D" value="F" required>D. 0</input></td></tr>

		
		<tr><td><h3>Q2. How many test wickets did Shane Warne get?</h3></td></tr>
		<tr><td><input type="radio" name="Q2" id="Q1A" value="T" required>A. 708</input></td></tr>
		<tr><td><input type="radio" name="Q2" id="Q1B" value="F" required>B. 700</input></td></tr>
		<tr><td><input type="radio" name="Q2" id="Q1C" value="F" required>C. 763</input></td></tr>
		<tr><td><input type="radio" name="Q2" id="Q1D" value="F" required>D. 726</input></td></tr>


		
		<tr><td><h3>Q3. How many cricket world cups has Australia won?</h3></td></tr>
		<tr><td><input type="radio" name="Q3" id="Q3A" value="F" required>A. 4</input></td></tr>
		<tr><td><input type="radio" name="Q3" id="Q3B" value="F" required>B. 3</input></td></tr>
		<tr><td><input type="radio" name="Q3" id="Q3C" value="T" required>C. 5</input></td></tr>
		<tr><td><input type="radio" name="Q3" id="Q3D" value="F" required>D. 2</input></td></tr>

		
		<tr><td><h3>Q4. What was Sir Donald Bradman's batting average?</h3></td></tr>
		<tr><td><input type="radio" name="Q4" id="Q4A" value="F" required>A. 99.95</input></td></tr>
		<tr><td><input type="radio" name="Q4" id="Q4B" value="F" required>B. 100</input></td></tr>
		<tr><td><input type="radio" name="Q4" id="Q4C" value="F" required>C. 98</input></td></tr>
		<tr><td><input type="radio" name="Q4" id="Q4D" value="T" required>D. 99.94</input></td></tr>

		
		<tr><td><h3>Q5. How many test matches did Glenn McGrath play for Australia?</h3></td></tr>
		<tr><td><input type="radio" name="Q5" id="Q5A" value="F" required>A. 99</input></td></tr>
		<tr><td><input type="radio" name="Q5" id="Q5B" value="F" required>B. 144</input></td></tr>
		<tr><td><input type="radio" name="Q5" id="Q5C" value="F" required>C. 150</input></td></tr>
		<tr><td><input  type="radio" name="Q5" id="Q5D" value="T" required>D. 124</input></td></tr>

		
		<tr><td><h3>Q6. How many test runs did Ricky Ponting score?</h3></td></tr>
		<tr><td><input type="radio" name="Q6" id="Q6A" value="F" required>A. 12,673</input></td></tr>
		<tr><td><input type="radio" name="Q6" id="Q6B" value="F" required>B. 11,642</input></td></tr>
		<tr><td><input type="radio" name="Q6" id="Q6C" value="T" required>C. 13,378</input></td></tr>
		<tr><td><input type="radio" name="Q6" id="Q6D" value="F" required>D. 15,093</input></td></tr>

		
		<tr><td><h3>Q7. How many test wickets did Brett Lee take?</h3></td></tr>
		<tr><td><input type="radio" name="Q7" id="Q7A" value="F" required>A. 302</input></td></tr>
		<tr><td><input type="radio" name="Q7" id="Q7B" value="T" required>B. 310</input></td></tr>
		<tr><td><input type="radio" name="Q7" id="Q7C" value="F" required>C. 298</input></td></tr>
		<tr><td><input type="radio" name="Q7" id="Q7D" value="F" required>D. 346</input></td></tr>

		
		<tr><td><h3>Q8. What is Shane Warne's highest test batting score?</h3></td></tr>
		<tr><td><input type="radio" name="Q8" id="Q8A" value="F" required>A. 122</input></td></tr>
		<tr><td><input type="radio" name="Q8" id="Q8B" value="F" required>B. 205</input></td></tr>
		<tr><td><input type="radio" name="Q8" id="Q8C" value="F" required>C. 60</input></td></tr>
		<tr><td><input type="radio" name="Q8" id="Q8D" value="T" required>D. 99</input></td></tr>

		
		<tr><td><h3>Q9. How many test runs did Justin Langer score?</h3></td></tr>
		<tr><td><input type="radio" name="Q9" id="Q9A" value="T" required>A. 7,696</input></td></tr>
		<tr><td><input type="radio" name="Q9" id="Q9B" value="F" required>B. 6,126</input></td></tr>
		<tr><td><input type="radio" name="Q9" id="Q9C" value="F" required>C. 11,938</input></td></tr>
		<tr><td><input type="radio" name="Q9" id="Q9D" value="F" required>D. 5,640</input></td></tr>


		<tr><td><h3>Q10. How many catches did Adam Gilchrist take?</h3></td></tr>
		<tr><td><input type="radio" name="Q10" id="Q10A" value="F" required>A. 438</input></td></tr>
		<tr><td><input type="radio" name="Q10" id="Q10B" value="T" required>B. 379</input></td></tr>
		<tr><td><input type="radio" name="Q10" id="Q10C" value="F" required>C. 128</input></td></tr>
		<tr><td><input type="radio" name="Q10" id="Q10D" value="F" required>D. 298</input></td></tr>

		<tr><td><button type="submit" name="submit">Send Answer for Quiz</button></td></tr>
		

		</table>
	</form>

	

</main>
</div>
<?php require("footer.php"); ?>



</body>
</html>