<?php
include 'header.php';


 ?>
<html>
<head>
<title>Untitled Document</title>
</head>
<style type="text/css">
@font-face
{
font-family:hell;
src: url('font/hhlight.ttf');
}
.endtext
{
	font-family:hell; font-size:100px
	
}
</style>

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


















</div>
</body>
</html>