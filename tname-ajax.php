<? 
$db=mysql_connect("localhost","e3user","11/610cbEe") or die(mysql_error());
mysql_select_db("cquiz",$db) or die(mysql_error()); 	
$tname=$_GET['tname'];
$query ="select username from users where username ='".$tname."'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)) 
{
echo " This Team name already exist !";
}

?>

