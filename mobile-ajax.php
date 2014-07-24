<? 
$db=mysql_connect("localhost","e3user","11/610cbEe") or die(mysql_error());
mysql_select_db("cquiz",$db) or die(mysql_error()); 	
$mobileno=$_GET['mobileno'];
$query ="select mobileno from users where mobileno ='$mobileno'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)) 
{
echo " This Mobile no already exist !";
}

?>

