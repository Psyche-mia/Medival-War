<?php

session_start();
$warrior=$_SESSION['warrior'];
$city=$_SESSION["city"];
$cityid;

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($_SESSION['id'], $con);

$sql1="SELECT fortressid from fortresses  where fortressname ='".$city."'";
$result1=mysql_query($sql1,$con);
                if(!$result1)die("Error 1");
                while ($row=mysql_fetch_array($result1,MYSQL_ASSOC)) {
                	$cityid=$row['fortressid'];
                

}


//get checked item
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            
            //set warrior to 1 (worked)
            $warrior[$check]=1;
            $_SESSION['warrior']=$warrior;
            $_SESSION[$_SESSION["command"]][$cityid]+=1;


            
      echo "Warriors have finished farming.";
    }
    echo $_SESSION[$_SESSION["command"]][$cityid];
}

header("Location:command.php");
?>

