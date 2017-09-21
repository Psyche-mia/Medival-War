
						<!DOCTYPE HTML>
						<html>
						<head>
						<meta charset="UTF-8">
						<title>Welcome</title>
						<style type="text/css">

						</style>


		
						</head>
						<body>
						

						

						
						<!--<embed height="100" width="100" src="http://localhost/Medievalwar/music/01.mp3" hidden="true" />-->



					   
					    
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

$sql1="SELECT fortressname from fortresses where fortressname= '".$ci."' and ownership = (SELECT ForcesID from forces where forcesname = '".$_SESSION["power"]."')";
$result1=mysql_query($sql1,$con);
if(!$result1)die("Error 1");
while($row=mysql_fetch_array($result1,MYSQL_ASSOC))
{

     
     if($row['fortressname'])
     {
     	//echo "yes";
     					echo"<div class=\"div2\" >";
						echo "<A href=\"http://localhost/Medievalwar/choose_battle.php\"><IMG src=\"http://localhost/Medievalwar/img/battle.png\"  border=\"0\" align=\"absmiddle\" ></A>";

						echo "</div>";

						     					echo"<div class=\"div2\" >";
						echo "<A href=\"http://localhost/Medievalwar/command.php\"><IMG src=\"http://localhost/Medievalwar/img/command.png\"  border=\"0\" align=\"absmiddle\" ></A>";

						echo "</div>";



     }
}




						?>
						
						
						
						</body>
						</html>