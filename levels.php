
<title>Questions</title>
<?php 
include 'header.php'; 



?>
<script type="text/javascript">
 function Validate() {
    var radios = document.getElementsByName('qq')

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
        
		return true; // checked
    }
    };
 
    // not checked, show error
    document.getElementById('ValidationError').innerHTML = 'Error!!!';
    return false;
}
</script>

</head>
<?php

include("config.php");
$username=$_SESSION["uname"];
$user13= mysql_query("select * from users where username='".$username."'",$db);
$userrow = mysql_fetch_assoc($user13);

$sno=$userrow["cqno"];
$dqq = mysql_query("select * from question where qno='".$sno."'",$db);
$row = mysql_fetch_assoc($dqq);
$type=$row["type"];
$level=$userrow["level"];

if(($sno<=30)&&($level==0))
{
	if($type==1)
	{
		?>
<span style="text-align:center;margin-left:200px;"><?php echo "Question:".$sno;?></span>
 <?
   ?>  
   <form  action="ansprocess.php" method="post">

 <br />
<table class="tablequestion" >
 <tr>
    <td><div style="margin-left:80px;">  <?php echo $row["question"];
	 ?></div></td>
 </tr>
 
     <tr height="20px;">
     <td>
     <div style="margin-left:200px;"> 
     <label>
     <input type="radio" name="qq" value="a" /><?php echo $row["option1"];?>
     </label>
     </div>
     </td>
     </tr>
     <tr>
     <td>
          <div style="margin-left:200px;"> 

      <label><input type="radio" name="qq" value="b" /><?php echo $row["option2"];?></label>
     </td>
     </tr><tr>
     <td>
          <div style="margin-left:200px;"> 

      <label><input type="radio" name="qq" value="c" /><?php echo $row["option3"];?></label>
     </td>
     </tr><tr>
     <td>
          <div style="margin-left:200px;"> 

      <label><input type="radio" name="qq" value="d" /><?php echo $row["option4"];?></label>
     </td>
     </tr>
</table>

<input type="hidden" name="qqno"  value="<?php echo $sno; ?>"/>
<input type="hidden" name="aa"  value="<?php echo $row["answer"]; ?>"/>
&nbsp;<br />
<br />
  <div style="margin-left:200px;"> 

&nbsp;&nbsp;&nbsp;<input type="submit" value="Next"   name="submit" id="ss"  class="next"/>

</form>

<?php
	}
	else if($type==2)
	{
		?> <script type="text/javascript">

location.href='type01.php';

</script>  <?php	
		
		}
	
	}
else if(($sno>30)&&($level==1))
{
	?> <script type="text/javascript">

location.href='levels1.php';

</script>  <?php	

}
else if(($sno>30)&&($level==2))
{
	?> <script type="text/javascript">

location.href='levels2.php';

</script>  <?php	

}

else if($sno>30)
{
	?> <script type="text/javascript">

location.href='choose.php';

</script>  <?php	

}

?>


</body>
</div>

</html>