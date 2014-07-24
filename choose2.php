<title>Untitled Document</title>
<?php include 'header.php';
include 'config.php'; 
$username=$_SESSION["uname"];

 $ccno12=301;
	$qqq=3;
	$updateqno111=mysql_query("UPDATE `users` SET `level`='".$qqq."' WHERE `username`='".$username."'",$db);
 $updateqno12=mysql_query("UPDATE `users` SET `cqno`='".$ccno12."' WHERE `username`='".$username."'",$db);
	   if($updateqno12==1)
	   { 
		   	   
		   	   ?>
	  <script> location.href='levels3.php';</script>
	   	   <?php
		
		}
	?>


</body>
</html>