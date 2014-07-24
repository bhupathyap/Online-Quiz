<html>
<title></title>
<head>
<?php include 'config.php'; ?>


<link rel="stylesheet"  type="text/css" href="css/leaderstyle.css" />
</head>
<script type="text/javascript">
function deleteuser(username)
{
	alert("inss");
location.href='deleteuser.php?username='+username;	
}
</script>

<body style="background-color:#FFFFFF;">

 <span style="text-align:center;margin-left:600px; font-size:36px">LeaderBoard</span>
<div  class="leader">
  
<table align="center">
<th>Name 1</th>
<th>Name 2</th>
<th>Marks</th>
<th>Mobile no</th>
<th>College</th>
<th>Team Name</th>
<th>Delete User</th>
<?php
$sql = "SELECT * FROM users where level=2 ORDER BY mark DESC";
	$ref = mysql_query($sql);
	$i = 1;
	while($row = mysql_fetch_assoc($ref))
	{
		?><tr> 
        <td><?php echo $row["name1"];?> </td>
        <td><?php echo $row["name2"];?> </td>
        <td><?php echo $row["mark"];?> </td>
        <td><?php echo $row["mobileno"];?> </td>
        <td><?php echo $row["college"];?> </td>
        <td><?php echo $row["username"];?></td>
        <td><div class="delete" onClick="deleteuser('<?php echo $row["username"];?>')">Delete</div></td>
         </tr>
          <?php
		  $i++;
	}

?>
</table>
</div>

</body>
</html>