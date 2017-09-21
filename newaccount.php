<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Medieval", $con);

$sql1="SELECT count(*) from user";
$result1=mysql_query($sql1,$con);
if(!$result1)die("Error 1");
while ($row=mysql_fetch_array($result1,MYSQL_ASSOC))
{
     $row_number=$row['count(*)']+1;
}
echo $row_number;
$sql="INSERT INTO user (userid, id, pwd, name)
VALUES
($row_number,'$_POST[id]','$_POST[password]','$_POST[name]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
//Create a new database
  $id=$_POST["id"];
  $sql2="CREATE DATABASE ".$_POST["id"];

  if (mysql_query($sql2,$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
  //import sql to new database
  mysql_select_db($id, $con);
  $file_dir = dirname(__FILE__); 
$file_name = "MedivalWar.sql";
$get_sql_data = file_get_contents($file_name,$file_dir);
$explode = explode(";",$get_sql_data); 
$cnt = count($explode); 
for($i=0;$i<$cnt ;$i++){ 

$sql = $explode[$i]; 

$result = mysql_query($sql); 

if($result){ 
echo "成功:".$i."个查询<br>"; 
} 
else 
{ 
echo "导入失败:".mysql_error(); 
} 
} 



mysql_close($con);

                  session_start();
                $_SESSION['id'] = $_POST["id"];
                //$_SESSION['power'] = $_POST["power"];
                $_SESSION['name'] = $_POST["name"];
                $_SESSION['hisdate'] = "1055-01-01";
                //whether warrior is free
                //0 is free
                $warrior =array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
                $command =array(0,0,0,0,0,0,0,0,0,0,0,0,0);
                $_SESSION['warrior'] =$warrior;
                $_SESSION['farming'] =$command;
                $_SESSION["business"]=$command;
                $_SESSION["searching"]=$command;
                $_SESSION["plundering"]=$command;
                $_SESSION["administration"]=$command;
                $_SESSION["conscription"]=$command;
                //whether battle
                $_SESSION['battle'] =0;

echo "Succeed!";
header('Location: choosepower.php');
?>
