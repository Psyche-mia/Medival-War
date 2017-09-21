    <?php
    session_start();
    //store session
    
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db($_SESSION['id'], $con);
    
    $co=$_GET["co"];
    $_SESSION["command"]=$co;
    $warrior=$_SESSION['warrior'];
    $city=$_SESSION["city"];
    
    $check=0;
    
    
    //echo $co;
    echo "<form action=\"http://localhost/Medievalwar/cal_command.php\" method=\"post\" >";
    echo "Please choose warriors for ".$co.".<br /><br />";
    
    $sql1="SELECT warriorid, warriorname from warriors where location = (select fortressid from fortresses where fortressname ='".$city."')";
    $result1=mysql_query($sql1,$con);
    if(!$result1)die("Error 1");
    while ($row=mysql_fetch_array($result1,MYSQL_ASSOC)) {
    
    
    $id= $row['warriorid'];
    $name= $row['warriorname'];
    if($warrior[$id]==0)
    {
    //echo $warrior[$id];
    echo "<label><input name=\"check_list[]\" type=\"checkbox\" value=\"".$id."\" />".$name."</label><br/>";
    $check=1;
    
    }
    
    
    }
    if($check==0){
    echo "No warrior is available now.";
    }
    else{
    echo "<br/><input type=\"submit\" name=\"submit\" value=\"submit\" class=\"confirm\">";
    
    echo "</form>";}

    echo "<IMG src=\"http://localhost/Medievalwar/img/".$_SESSION["command"].".png\"  border=\"0\" align=\"absmiddle\" >";
    
    
    
    
    
    
    
    
    
    
    
    
    mysql_close($con);
    
    
    
    //echo "Succeed!";
    
    ?>