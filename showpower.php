      <?php
      session_start();
      //store session
      
      
      
      $po=$_GET["power"];
      $_SESSION['power'] = $po;
      echo $po;
      
      
      if($po=="Duchy of Bavaria")
      {
      
      echo "<div class=\"saxony\"><IMG src=\"http://localhost/Medievalwar/img/s.png\"  border=\"0\" align=\"absmiddle\" ></div>";
      
      }
      if($po=="Duchy of Saxony")
      {
      echo "<div class=\"bavaria\"><IMG src=\"http://localhost/Medievalwar/img/b.png\"  border=\"0\" align=\"absmiddle\" ></div>";
      }
      if($po=="Kingdom of Italy")
      {
      echo "<div class=\"italy\"><IMG src=\"http://localhost/Medievalwar/img/i.png\"  border=\"0\" align=\"absmiddle\" ></div>";
      
      }
      $con = mysql_connect("localhost","root","");
      if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      
      mysql_select_db("Medieval", $con);
      
      $sql="UPDATE user
      SET power='".$po."' WHERE id='".$_SESSION['id']."'";
      
      if (!mysql_query($sql,$con))
      {
      die('Error: ' . mysql_error());
      }
      
      
      mysql_close($con);
      
      
      
      //echo "Succeed!";
      
      ?>