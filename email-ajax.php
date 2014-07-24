<? 
$db=mysql_connect("localhost","e3user","11/610cbEe") or die(mysql_error());
mysql_select_db("cquiz",$db) or die(mysql_error()); 	
$email=$_GET['email'];
$query ="select email from users where email ='".$email."'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)) 
{
echo " This email id already exist";
}

?>

