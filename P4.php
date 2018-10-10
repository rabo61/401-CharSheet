<html>
<head>
<style type="text/css">
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
}
</style>
</head>
<body bgcolor="#e1e1e1">

<div id="wrapper">


<br />
<br />

<?php
   
DEFINE ('server', 'localhost');
DEFINE ('user', 'cmps401');
DEFINE ('pass', 'Mycmps401db');
DEFINE ('dbname', 'cmps401');
    
$dbcon = mysqli_connect(server, user, pass, dbname);
    
if (!$dbcon) {
  die("<br>Connection failed:");
}
 
echo "<br>Connection Success: Database cmp401 Connected";

?>
    
<?php
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $d= $_POST['time'];
    $score= $_POST['score'];
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
    $answer4= $_POST['answerFour'];
    $answer5= $_POST['answerFive'];
    $answer6= $_POST['answerSix'];
    $answer7= $_POST['answerSeven'];
    $answer8= $_POST['answerEight'];
    $answer9= $_POST['answerNine'];
    $answer10= $_POST['answerTen'];
	$score = 0;
	
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "C"){$score++;}
	if ($answer3 == "A"){$score++;}
    if ($answer4 == "A"){$score++;}
    if ($answer5 == "C"){$score++;}
    if ($answer6 == "B"){$score++;}
    if ($answer7 == "A"){$score++;}
    if ($answer8 == "C"){$score++;}
    if ($answer9 == "A"){$score++;}
    if ($answer10 == "P4.php"){$score++;}
	echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/10</font></center>";
	
    $sqlinsert = "INSERT INTO g106 (FirstName, LastName, Score, Time, answerOne, answerTwo, answerThree, answerFour, answerFive, answerSix, answerSeven, answerEight, answerNine, answerTen) VALUES ('$fname', '$lname', '$d', '$score', '$answerOne', '$answerTwo', '$answerThree', '$answerFour', '$answerFive', '$answerSix', '$answerSeven', '$answerEight', '$answerNine', '$answerTen')";
    
    if($conn->query($sql) === TRUE){
        echo "Score Added Sucessfully";
    }
    else
    {
        echo "Error" . $sql . "<br/>" . $conn->error;
    }
    $conn->close();


?>


</div><!--- end of wrapper div --->

</body>
</html>
