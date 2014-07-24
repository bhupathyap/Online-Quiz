<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include 'header.php'; ?>

<title>E3</title>
<?php 
include("config.php");
$username=$_SESSION["uname"];
$uname=$_SESSION['uname'];
$ann=$_POST["qq"];
$qno=$_POST["qqno"];
$ans=$_POST["aa"];
/*echo $ann;
echo $qno;
echo $ans;*/
 $sno=$qno;
	 $sno=$qno;
	 $sno=$sno+1;
	 $updateqno=mysql_query("UPDATE `users` SET `cqno`='".$sno."' WHERE `username`='".$username."'",$db);
	   if($updateqno==1)
	   {
		   	   ?>
	   <script type="text/javascript"></script>
	   	   <?php
		
		}
	   	   
if($ann==$ans)
{
	 $mm = mysql_query("select * from users where username='".$username."'",$db);
	 $row1=mysql_fetch_assoc($mm);
	 
	   $tempmark=$row1["mark"];
	   $uid=$row1["ID"];
	   $tempmark=$tempmark+1;
	  /* echo $tempmark;*/
	   $updatemark=mysql_query("UPDATE `users` SET `mark`='".$tempmark."' WHERE `username`='".$username."'",$db);
	   if($updatemark==1)
	   {
		   	   ?>
	   <script type="text/javascript">location.href = 'levels.php';</script>
	   	   <?php
		
		   }
	   	  
		   
		   
		   
}

	 ?>
	   <script type="text/javascript">location.href = 'levels.php';</script>
	   	   <?php
		   




?>







</body>
</html>