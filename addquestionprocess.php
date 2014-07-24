<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Question</title>
</head>

<body>

<?php
include("config.php");
$qno=$_POST["qno"];
$question=$_POST["question"];
$option1=$_POST["option1"];
$option2=$_POST["option2"];
$option3=$_POST["option3"];
$option4=$_POST["option4"];
$answer=$_POST["answer"];
/*echo $qno;
echo $question;
echo $option1;
echo $option2;
echo $option3;
echo $option4;
echo $answer;*/
$add = mysql_query("INSERT INTO `question`(`qno`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES ('".$qno."','".$question."','".$option1."','".$option2."','".$option3."','".$option4."','".$answer."')",$db);
   if($add==1)
 { 
    ?><script>
      alert("Question Added");
	 location.href='addquestion.php';

    </script><?php
	
 }
 else
 {
	    ?><script>
      alert("Please Try again");
	/*  location.href='Register.php';*/

    </script><?php
	 
 }
    ?>







?>





</body>
</html>