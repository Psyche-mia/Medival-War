




<?php 
session_start();


?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Command</title>
<style type="text/css">
body {background-image:url("http://localhost/Medievalwar/img/bg4.png");
background-repeat:no-repeat;




/*width: 1500px;*/
/*margin-left: 50px;
margin-right: 50px;
margin-top: 40px;*/
color: black;
font-family:  Florence, cursive; }


.png{
opacity:0.4;
}


.div1{
position:fixed; left: 1050px; top: 200px;
color: white;

}

.div2{
position:fixed; left: 1050px; top: 200px;
font-size: 25px;
color: white;

}
.abc {
position:fixed; left: 1050px; top: 40px;
font-size: 20px;
color: white;



}
.div3 {
position:fixed; left: 120px; top: 160px;
font-size: 20px;
}
.div4{
position:fixed; left: 340px; top: 160px;
font-size: 30px;

}
.over{
position:fixed; left: 20px; bottom: 40px;


}

ul
{
list-style-type:none;
margin:0;
padding:0;
}
a:link,a:visited
{
display:block;
font-weight:bold;
color:white;

width:200px;
text-align:center;
padding:4px;
text-decoration:none;
text-transform:uppercase;
}
a:hover,a:active
{
background-color:#cc0000;
}
.backto{
background:url("http://localhost/Medievalwar/img/button.png") no-repeat ;
background-position:50% 50%;
background-size: 400px;
width: 250px;
height: 50px;
border:0px;
cursor:pointer;
font-size:230%;
font-family:  Florence, cursive; 
color:white;
}

.confirm{
background:url("http://localhost/Medievalwar/img/button.png") no-repeat ;
background-position:50% 50%;
background-size: 400px;
width: 250px;
height: 50px;
border:0px;
cursor:pointer;
font-size:100%;
font-family:  Florence, cursive; 
color:white;
}

</style>
<script type="text/javascript">
var choosecity;
function show(co){
music();
var xmlHttp=null;
try
{//       Firefox, Opera 8.0+, Safari, IE7
xmlHttp=new XMLHttpRequest();
}
catch(e)
{// Old IE
try
{
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}
catch(e)
{
alert ("Your browser does not support XMLHTTP!");
return;  
}
}

// main.innerHTML="a";
var url="http://localhost/Medievalwar/command_ajax.php?co="+co;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
xmlHttp.onreadystatechange=function()
{
if(xmlHttp.readyState==4)
{
if(xmlHttp.status==200)
{
//Remember to change id !!
commandinfo.innerHTML=xmlHttp.responseText;
}
else
{
command.innerHTML="Promblem in retrieving data: "+xmlHttp.statusText;
}
}
}
}









function music()
{
//play button music
//var mu1=document.getElementById("mu1");
var mu2=document.getElementById("mu2");

mu2.play();

}

</script>
</head>
<body>




<!--<embed height="100" width="100" src="http://localhost/Medievalwar/music/01.mp3" hidden="true" />-->


<div class="abc" >

<?php
echo"<p>Welcome ".$_SESSION["name"]."! ";
echo"Today is ".$_SESSION["hisdate"].". ";
echo "<a href=\"destroysession.php\">Log out</a></p> ";
if(!(isset($_SESSION['id'])))
header("Location: index.php");
echo"You belong to ".$_SESSION["power"].".";
?>
<IMG src=<?php if($_SESSION["power"]=="Duchy of Saxony") echo"http://localhost/Medievalwar/img/m2.png";
else if($_SESSION["power"]=="Duchy of Bavaria") echo "http://localhost/Medievalwar/img/m1.png";
else if($_SESSION["power"]=="Kingdom of Italy") echo "http://localhost/Medievalwar/img/m3.png";
?>  border="0" align="absmiddle" class= "png" >
</div>


<div class="div1">
<p id="info">

</p>
</div>

<div class="div2">
<p id="cityinfo">
<?php 
//session_start();
$ci=$_SESSION["city"];



$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db($_SESSION["id"], $con);
//echo $ci;
//echo $_SESSION["power"];

$sql1="SELECT fortressname,food,currency,loyalty,troops,ownership,agriculture,business from fortresses where fortressname= '".$ci."'";
$result1=mysql_query($sql1,$con);
if(!$result1)die("Error 1");
while($row=mysql_fetch_array($result1,MYSQL_ASSOC))

{
echo "<br/>City Name:  ".$row["fortressname"];
echo "<ul ><li>Food: ".$row["food"]."</li>";
echo "<li>Money: ".$row["currency"]."</li>";
echo "<li>Loyalty: ".$row["loyalty"]."</li>";
echo "<li>Troops: ".$row["troops"]."</li>";
echo "<li>Business: ".$row["business"]."</li>";
echo "<li>Agriculture: ".$row["agriculture"]."</li></ul><br/>";
$sql2="SELECT ForcesName from forces where Forcesid= '".$row["ownership"]."'";
$result2=mysql_query($sql2,$con);
if(!$result2)die("Error 1");
while($row=mysql_fetch_array($result2,MYSQL_ASSOC))
{

if($row["ForcesName"]==$_SESSION["power"])
{echo "<span style=\"background-color:#007d65;font-size:20px;\">This is your fortress!</span>";}
else
{
echo "<span style=\"background-color:#aa2116;font-size:20px;\">This is an enemy fortress!</span>";
}




}

}



?>
</p>
</div>

<div class="div3">
<ul>
<li><a href="javascript:onClick=show('farming')">Farming</a><br/></li>
<li><a href="javascript:onClick=show('business')">Business</a><br/></li>
<li><a href="javascript:onClick=show('searching')">Searching</a><br/></li>
<li><a href="javascript:onClick=show('plundering')">Plundering</a><br/></li>
<li><a href="javascript:onClick=show('administration')">Administration</a><br/></li>
<li><a href="javascript:onClick=show('conscription')">Conscription</a><br/></li>
</ul>
</div>


<div class="div4">
<p id="commandinfo">

</p>
</div>

<div class="over" >
<form action="welcome.php">

<input type="submit" value="Back" onclick="music()" class="backto">
</form>
<!--music-->
</div>  
<audio controls="controls" hidden="true"  id="mu2">
<source src="http://localhost/Medievalwar/music/button1.mp3" type="audio/mp3" />
<source src="http://localhost/Medievalwar/music/button1.ogg" type="audio/ogg" />
Your browser does not support this audio format.
</audio>
     <embed height="100" width="100" src="http://localhost/Medievalwar/music/02.mp3" hidden="true" loop="true" />



</body>
</html>