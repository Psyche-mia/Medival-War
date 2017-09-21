
            <html>
            <head>
            <meta charset="UTF-8">
            <title>Welcome</title>

            <style type="text/css">
            body {background-image:url("http://localhost/Medievalwar/img/bg2.png");
            background-repeat:no-repeat;
            background-position:center;
                 /* width: 960px;*/
      margin-left: 14%;
      margin-right: 30%;
      margin-top: 5%;
     font-family:  Florence, cursive; }
     .button2{
                              background:url("http://localhost/Medievalwar/img/button.png") no-repeat ;
                                          background-position:50% 50%;
                                          background-size: 400px;
                                          width: 250px;
                                          height: 50px;
                                          border:0px;
                                          cursor:pointer;
                                          font-size:150%;
                                          font-family:  Florence, cursive; 
     }
            
            </style>
            </head>
            <body>
            <?php
session_start();


//get session data


$farming=$_SESSION["farming"];

                $business=$_SESSION["business"];
                $searching=$_SESSION["searching"];
                $plundering=$_SESSION["plundering"];
                $administration=$_SESSION["administration"];
                $conscription=$_SESSION["conscription"];
                //connect to database
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($_SESSION["id"], $con);

////////update farming data
$number=0;

foreach($farming as $key=>$check) {
  
      
            
            //set warrior to 1 (worked)
            if($check!=0)
            {
              $sql1="UPDATE fortresses
      SET currency=(currency-1000*".$check."), agriculture = agriculture +".rand(50,150)." WHERE fortressid='".$key."'";

      //echo $check;
      $number+=$check;


if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }

            }
            
}
if($number!=0)
{
  echo "<h1>Total ".$number." warriors were set for farming.</h1>";
}
////////update business data
$number=0;
  foreach($business as $key=>$check) {
  
      
            
            //set warrior to 1 (worked)
            if($check!=0)
            {
              $sql1="UPDATE fortresses
      SET currency=(currency-1000*".$check."), business = business +".rand(50,150)." WHERE fortressid='".$key."'";

      //echo $check;
      $number+=$check;


if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }

            }
            
}
if($number!=0){
  echo "<h1>Total ".$number." warriors were set for business.</h1>";
}
////////update searching data
$number=0;
  foreach($searching as $key=>$check) {
  
      
            
            //set warrior to 1 (worked)
            if($check!=0)
            {
              $sql1="UPDATE fortresses
      SET currency= currency+".rand(50,150)." WHERE fortressid='".$key."'";

      //echo $check;
      $number+=$check;


if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }

            }
            
}
if($number!=0){
  echo "<h1>Total ".$number." warriors were set for searching.</h1>";
}
////////update plundering data
$number=0;
  foreach($plundering as $key=>$check) {
  
      
            
            //set warrior to 1 (worked)
            if($check!=0)
            {
              $sql1="UPDATE fortresses
      SET currency= currency+".rand(1000,2000).", loyalty=loyalty-".rand(2,6).", business=business-".rand(100,300).", agriculture=agriculture-".rand(100,300)." WHERE fortressid='".$key."'";

      //echo $check;
      $number+=$check;


if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }

            }
            
}
if($number!=0){
  echo "<h1>Total ".$number." warriors were set for plundering.</h1>";
}
////////update administration data
$number=0;
  foreach($administration as $key=>$check) {
  
      
            
            //set warrior to 1 (worked)
            if($check!=0)
            {
              $sql1="UPDATE fortresses
      SET currency= currency-2500, loyalty=loyalty+".rand(1,3)." WHERE fortressid='".$key."'";

      //echo $check;
      $number+=$check;


if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }

            }
            
}
if($number!=0){
  echo "<h1>Total ".$number." warriors were set for administration.</h1>";
}
////////update conscription data
$number=0;
  foreach($conscription as $key=>$check) {
  
      
            
            //set warrior to 1 (worked)
            if($check!=0)
            {
              $sql1="UPDATE fortresses
      SET currency= currency-1000, troops=troops+".rand(500,1500)." WHERE fortressid='".$key."'";

      //echo $check;
      $number+=$check;


if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }

            }
            
}
if($number!=0){
  echo "<h1>Total ".$number." warriors were set for conscription.</h1>";
}


//add one month
mysql_select_db("Medieval", $con);

$newdate=date("Y-m-d",strtotime("+1 months",strtotime($_SESSION['hisdate'])));
//echo $newdate;

$_SESSION['hisdate']=$newdate;

$sql2="UPDATE user
      SET hisdate='".$newdate."' WHERE id='".$_SESSION['id']."'";

if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($con);

                  

  echo "<h1>Command finished!</h1>";
////////clear command & warrior sessions
$warrior =array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$_SESSION['warrior'] =$warrior;
                $command =array(0,0,0,0,0,0,0,0,0,0,0,0,0);
                $_SESSION['warrior'] =$warrior;
                $_SESSION['farming'] =$command;
                $_SESSION["business"]=$command;
                $_SESSION["searching"]=$command;
                $_SESSION["plundering"]=$command;
                $_SESSION["administration"]=$command;
                $_SESSION["conscription"]=$command;



                if($_SESSION["battle"]==1){
                  $_SESSION["battle"]=0;

                                  echo"  <form action=\"battle.php\">";
                              
                               echo"<input type=\"submit\" value=\"Battle\"  class=\"button2\">";
                              echo " </form>";
                             }

                               else{
                                $_SESSION["battle"]=0;
                         echo"  <form action=\"welcome.php\">";
                              
                               echo"<input type=\"submit\" value=\"Return\"  class=\"button2\">";
                              echo " </form>";

                               }




?>

                         
            
            
            
            
            
            </body>
            </html>