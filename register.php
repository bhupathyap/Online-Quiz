<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Get Started</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script type="text/javascript">

  	function AjaxFunction(email)
	{
		var httpxml;
		try
		  {
		  // Firefox, Opera 8.0+, Safari
		  httpxml=new XMLHttpRequest();
		  }
		catch (e)
		  {
		  // Internet Explorer
		try
				{
		httpxml=new ActiveXObject("Msxml2.XMLHTTP");
				}
		catch (e)
			{
		try
				{
			httpxml=new ActiveXObject("Microsoft.XMLHTTP");
				 }
				catch (e)
			{
		alert("Your browser does not support AJAX!");
		return false;
				}
				}
		}
		function stateck() 
		 {
		  	 if(httpxml.readyState==4)
		  	 {
			       
				document.getElementById("msg").innerHTML=httpxml.responseText;
			 }
		   }
		var url="email-ajax.php";
		url=url+"?email="+email;
		url=url+"&sid="+Math.random();
		httpxml.onreadystatechange=stateck;
		httpxml.open("GET",url,true);
		httpxml.send(null);
  }
  function AjaxFunction1(mobileno)
	{
		alert("aa");
		var httpxml;
		try
		  {
		  // Firefox, Opera 8.0+, Safari
		  httpxml=new XMLHttpRequest();
		  }
		catch (e)
		  {
		  // Internet Explorer
		try
				{
		httpxml=new ActiveXObject("Msxml2.XMLHTTP");
				}
		catch (e)
			{
		try
				{
			httpxml=new ActiveXObject("Microsoft.XMLHTTP");
				 }
				catch (e)
			{
		alert("Your browser does not support AJAX!");
		return false;
				}
				}
		}
		function stateck() 
		 {
		  	 if(httpxml.readyState==4)
		  	 {
				 
		
				document.getElementById("msg1").innerHTML=httpxml.responseText;
			 }
		   }
		var url="mobile-ajax.php";
		url=url+"?mobileno="+mobileno;
		url=url+"&sid="+Math.random();
		httpxml.onreadystatechange=stateck;
		httpxml.open("GET",url,true);
		httpxml.send(null);
  }
</script>




</head>

<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="register_files/formoid1/formoid-metro-red.css" type="text/css" />
<script type="text/javascript" src="register_files/formoid1/jquery.min.js"></script>
<form class="formoid-metro-red" ac action="adduser.php" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Get Started</h2></div>
	<div class="element-input"  title="Entet Name1"><label class="title">Name1<span class="required">*</span></label><input class="medium" type="text" name="name1" required placeholder="Enter name1"/></div>
	<div class="element-input"  title="Enter Name2"><label class="title">Name2<span class="required">*</span></label><input class="medium" type="text" name="name2" required placeholder="Enter Name 2"/></div>
	<div class="element-input"  title="Enter Your Team Name"><label class="title">Team Name<span class="required">*</span></label><input class="large" type="text" name="username" required placeholder="Enter Your Team Name"/></div>
	<div class="element-input"  title="Enter Your College Name "><label class="title">College<span class="required">*</span></label><input class="large" type="text" name="college" required placeholder="Enter Your College Name"/></div>
	<div class="element-number"  title="Enter Your Mobile no"><label class="title">Mobile no<span class="required">*</span></label><input class="large" type="text" min="7000000000" max="9000000000" maxlength="10" name="mobileno" required value="" placeholder="Enter Your Mobileno" onblur="AjaxFunction1(this.value);"/><div id="msg" style="padding-left:0px;color:#FF0000"></div></div>
	<div class="element-email"  title="Enter Your Email ID"><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required placeholder="Enter Your Email" onBlur="AjaxFunction(this.value);"> <div id="msg1" style="padding-left:0px;color:#FF0000"</div></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="register_files/formoid1/formoid-metro-red.js"></script>

<!-- Stop Formoid form-->



</body>
</html>
