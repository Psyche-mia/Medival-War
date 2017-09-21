<?php
     session_start();
     //store session
                
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($_SESSION['id'], $con);

//$co=$_GET["co"];
$warrior=$_SESSION['warrior'];
$city=$_SESSION["city"];


//echo $co;
echo "<form action=\"http://localhost/Medievalwar/cal_battle.php\" method=\"post\" >";
echo "Please choose warriors for battle.<br /><br />";

$sql1="SELECT warriorid, warriorname from warriors where location = (select fortressid from fortresses where fortressname ='".$city."')";
$result1=mysql_query($sql1,$con);
                if(!$result1)die("Error 1");
                while ($row=mysql_fetch_array($result1,MYSQL_ASSOC)) {
                
              
                $id= $row['warriorid'];
                $name= $row['warriorname'];
                if($warrior[$id]==0)
                {
                  //echo $warrior[$id];
                  echo "<label><input name=\"check_list[]\" type=\"checkbox\" value=\"".$id."\" />".$name."</label>";
                  
                }

}
echo "<br /><br />Please choose an enemy city for battle.<br /><br />";

$sql2="SELECT adjid1, adjid2, adjid3 from adjacentcity where fortressid = (select fortressid from fortresses where fortressname ='".$city."')";
$result2=mysql_query($sql2,$con);
                if(!$result2)die("Error 1");
                while ($row=mysql_fetch_array($result2,MYSQL_ASSOC)) {
                
             
                $id1= $row['adjid1'];
                $id2= $row['adjid2'];
                $id3= $row['adjid3'];


                //check city1
                if($id1!=13)
                	//echo $id1;
                {
                 $sql3="SELECT fortressname, forcesname from fortresses,forces where forcesid = ownership and fortressid= '".$id1."'";
                $result3=mysql_query($sql3,$con);
                if(!$result3)die("Error 1");
                while($row=mysql_fetch_array($result3,MYSQL_ASSOC)){
                
                	  	$cityname=$row['fortressname'];
                if($row['forcesname']!=$_SESSION["power"])
                {
                  
                 
                  echo "<input type=\"radio\" name=\"city[]\" value=\"".$id1."\" /> ".$cityname;
              }
                	
}
                  
                }
                                //check city2
                if($id2!=13)
                {
                	//echo $id2;
                 $sql4="SELECT fortressname, forcesname from fortresses,forces where forcesid = ownership and fortressid= '".$id2."'";
                $result4=mysql_query($sql4,$con);
                if(!$result4)die("Error 1");
                while($row=mysql_fetch_array($result4,MYSQL_ASSOC)){
                	$cityname=$row['fortressname'];
                if($row['forcesname']!=$_SESSION["power"])
                {
                  
                  echo "<input type=\"radio\" name=\"city[]\" value=\"".$id2."\" /> ".$cityname;
              }}
                  
                }
                                //check city3
                if($id1!=13)
                {
                	//echo $id3;
                 $sql5="SELECT fortressname, forcesname from fortresses,forces where forcesid = ownership and fortressid= '".$id3."' ";
                $result5=mysql_query($sql5,$con);
                if(!$result5)die("Error 1");
                while($row=mysql_fetch_array($result5,MYSQL_ASSOC)){
                	$cityname=$row['fortressname'];
                if($row['forcesname']!=$_SESSION["power"])
                {
                  
                  echo "<input type=\"radio\" name=\"city[]\" value=\"".$id3."\" /> ".$cityname;
              }}
                  
                }

}

echo "<br /><br /><input type=\"submit\" name=\"submit\" value=\"Submit\">";
echo "</form>";









mysql_close($con);

             
                
//echo "Succeed!";

?>