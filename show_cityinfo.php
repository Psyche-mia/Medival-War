  
					   <?php 
						session_start();
						$ci=$_GET["city"];
						$_SESSION["city"]=$ci;


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