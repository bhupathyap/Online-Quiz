<?php 
session_start();
$mins = isset($_SESSION["mins"]) ? $_SESSION["mins"] : 52;
$secs = isset($_SESSION["secs"]) ? $_SESSION["secs"] : 0;

if($_SESSION['uname']==null)
{?> <script type="text/javascript">location.href = 'register.html';</script> <?php  } ?>

<html>
<head>
<title>End!!!!!</title>
</head>
<style type="text/css">
@font-face
{
font-family:hell;
src: url('font/hhlight.ttf');
}
@font-face
{
font-family:sen;
src: url('font/Segoe Condensed Bold.ttf');
}
.endtext
{
	font-family:hell; font-size:100px
	
}
.treg
{
	font-family: sen;
	width:200px;
	border-radius:4px;
	padding:10px;
	background-color:#F33;
	margin-left:550px;
	cursor:pointer;
	text-align:center;
	
	}
</style>
<script type="text/javascript">
function dd()
{
	
location.href='register.html';	
	
}

</script>

<body>
<div class="end">
<div class="endtext" align="center";>


<?php

session_destroy();
 $_SESSION['uname']=null; 
$_SESSION=array();

?>
<span >End<br /></span>
<span >&nbsp;Thats it&nbsp;&nbsp;!!!!</span>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="treg" onClick="dd()">Take Me To Registration
</div>

















</div>
</body>
</html>