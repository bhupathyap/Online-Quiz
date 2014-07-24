<?php 
session_start();
$mins = isset($_SESSION["mins"]) ? $_SESSION["mins"] : 52;
$secs = isset($_SESSION["secs"]) ? $_SESSION["secs"] : 0;

if($_SESSION['uname']==null)
{?> <script type="text/javascript">location.href = 'register.html';</script> <?php  } ?>

<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
#txt {
border:2px solid red;
font-family:verdana;
font-size:16pt;
font-weight:bold;
background: #FECFC7;
width:100px;
text-align:center;
}
</style>
</head>
<body>
<div class="whole">
<div class="head">
 <div class="sessionname"> Welcome <?php echo $_SESSION['uname']; ?>!</div>
   <a  href="logouts.php">logout</a>
</div>

<div style="margin-left:750px;">
<form name="cd">
<input id="txt" name="txt" type="text" readonly>
</form>
</div>
<script>
var xmlhttp = false;
var mins = "<?php echo $mins ?>";
var secs = "<?php echo $secs ?>";
var secs1 = secs;
if(secs < 10){secs = "0" + secs;}
document.getElementById("txt").value = mins + ":" + secs;
secs = secs1;
var cd = setInterval("count_down_timer()",1000);
function count_down_timer()
{
 if(secs == 0 && mins == 0)
 {
  clearInterval(cd);
  alert("The time is up!");
  location.href='end.php';
  }
 else{if(secs == 0){secs = 59;mins--;}}
 if(secs < 10){secs = "0" + secs;}
 var tm = mins + ":" + secs;
 document.getElementById("txt").value = tm;
 send_request(mins,secs);
 secs--;
 }
function createRequest()
{
 /*@cc_on @*/
 /*@if (@_jscript_version >= 5)
 // JScript gives us Conditional compilation, we can cope with old IE versions.
 // and security blocked creation of the objects.
  try {
   xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
   try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   } catch (E) {
    xmlhttp = false;
   }
 }
 @end @*/
 if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    try {
        xmlhttp = new XMLHttpRequest();
    } catch (e) {
        xmlhttp=false;
    }
 }
 if (!xmlhttp && window.createRequest) {
    try {
        xmlhttp = window.createRequest();
    } catch (e) {
        xmlhttp=false;
    }
  }
 return xmlhttp;
 }
function send_request(m,s)
{
 var conn = createRequest();
 var url="update_session.php?min=" + m + "&sec=" + s;
 conn.open("GET", url);
 conn.send(null);
}
</script>


<div>





