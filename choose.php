<title>Choose your Choice</title>
<?php include 'header.php';
include 'config.php'; 
$username=$_COOKIE["username"];

?>
<link rel="stylesheet"  type="text/css" href="css/style.css" />

</head>
<script type="text/javascript">
function firstcall()
{
  location.href='choose3.php';		
}
function secondcall()
{
	
	
  location.href='choose1.php';
}

function thirdcall()
{
		
  location.href='choose2.php';
}


</script>
</div>
<br />
<br />
<br />
<div style="margin-left:300px;">
Choose Your Favourite

<br />
<br />

<input type="button" value="MECH/MCE/AUTO" onclick="firstcall()" id="first" style="color:#FFF; cursor:pointer;"/><br /><br />
<br />

<input type="button" value="EEE/ECE/E&I/" onclick="secondcall()"   id="second"  style="padding-right:70px;color:#FFF; cursor:pointer;"/><br /><br />
<br />

<input type="button" value="CSE/IT/MCA" onclick="thirdcall()"   id="second"  style="padding-right:80px;color:#FFF; cursor:pointer;"/><br />

</div>
</body>
</html>