								<?php
								
								$id=$_GET["id"];
								$pwd=$_GET["pwd"];
								
								//Remember to change database login name and password!!
								$con = mysql_connect("localhost","root","");
								if (!$con)
								{
								die('Could not connect: ' . mysql_error());
								}
								//Remember to change database!
								mysql_select_db("Medieval", $con);
								$query = "SELECT id,name,power,hisdate from user where id='".$id."' and pwd='".$pwd."'";
								$result=mysql_query($query,$con);
								if(!$result)die("Error 1");
								if(mysql_num_rows($result)==0)
								{
								
								echo "Wrong userID or password!";
								
								}  
								else{
								while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) {
								
								session_start();
								$_SESSION['id'] = $row['id'];
								$_SESSION['name'] = $row['name'];
								$_SESSION['power'] = $row['power'];
								$_SESSION['hisdate'] = $row['hisdate'];
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

								
								
								echo "Welcome back ".$_SESSION['name']."! Press button to start game!</br></br>";
								echo "<form name=\"start\" method=\"post\" action=\"welcome.php\">";
								echo "<input type=\"submit\" value=\"Start Game\" onclick=\"music()\" class=\"button3\">";
								echo "</form>";
								
								
								
								}}



								mysql_close($con);
								?>