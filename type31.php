
<title>Questions</title>
<?php 
include 'header1.php'; ?>
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
$dqq = mysql_query("select * from question3 where qno='".$sno."'",$db);
$row = mysql_fetch_assoc($dqq);

$level=$userrow["level"];
$type=$row["type"];
if(($sno<=330)&&($level==3)&&($type==2))
{

   ?>  
   <form  action="ansprocess3.php" method="post">

 <br />
 </div>
 <div style="width:900px;height:1000px;">
<table class="tablequestion" >

 <tr>
    <td> <div style="margin-left:150px;width:900px;height:400px;"> <img src="<?php echo $row["question"];?>" width="600" height="400" id="iimage"></div> </td>
 </tr>
        <tr height="20px;">
     <td>
     <div style="margin-left:350px;margin-top:40px; width:100px;height:5px;"><label>
     <input type="radio" name="qq" value="a" /><?php echo $row["option1"];?>
     </label></div>
     </td>
     </tr>
     <tr>
     <td>
           <div style="margin-left:350px;margin-top:40px; width:100px;height:50px;"><label>

      <input type="radio" name="qq" value="b" /><?php echo $row["option2"];?></label></div>
     </td>
     </tr><tr>
     <td>
     <div style="margin-left:350px;margin-top:0px; width:100px;height:50px;"> <label><input type="radio" name="qq" value="c" /><?php echo $row["option3"];?></label></div>
     </td>
     </tr><tr>
     <td>
      <div style="margin-left:350px;margin-top:0px; width:100px;height:50px;"><label><input type="radio" name="qq" value="d" /><?php echo $row["option4"];?></label></div>
     </td>
     </tr>
</table>

<input type="hidden" name="qqno"  value="<?php echo $sno; ?>"/>
<input type="hidden" name="aa"  value="<?php echo $row["answer"]; ?>"/>
&nbsp;
&nbsp;&nbsp;&nbsp;<div style="margin-left:350px;margin-top:0px; width:100px;height:50px;"><input type="submit" value="Next"   name="submit" id="ss"  class="next"/></div>

</form>

<?php
}
else if($sno>330)
{		
		
	?> <script type="text/javascript">

location.href='end.php';

</script>  <?php	

	
}
?>


</body>
</div>
</div>
</html>