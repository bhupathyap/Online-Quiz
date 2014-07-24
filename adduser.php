<?php  
session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$_SESSION['uname']=$_POST["username"];
include("config.php");
$name=$_POST["name1"];
$name2=$_POST["name2"];
$username=$_POST["username"];
$college=$_POST["college"];
$department=$_POST["department"];
$mobileno=$_POST["mobileno"];
$email=$_POST["email"];
/*echo $name;
echo $college;
echo $department;
echo $mobileno;
echo $email;*/
$ss=1;
$level=0;
$add1 = mysql_query("INSERT INTO `users`(`name1`,`name2`,`username`,`college`, `department`, `mobileno`, `email`,`cqno`,`level`) VALUES ('".$name."','".$name2."','".$username."','".$college."','".$department."','".$mobileno."','".$email."','".$ss."','".$level."')",$db);
  if($add1==1)
   {
	   setcookie("username","$username");
	  
   
    ?><script>
      alert("Registered Successfully");
	  
	 location.href='levels.php';

    </script><?php
	
 }
 else
 {
	    ?><script>
      alert("Please Try again");
   location.href='register.html';

    </script><?php
	 
 }
    ?>







</body>
</html>