								<?php
								
								$id=$_GET["id"];
								
								//Remember to change database login name and password!!
								$con = mysql_connect("localhost","root","");
								if (!$con)
								{
								die('Could not connect: ' . mysql_error());
								}
								//Remember to change database!
								mysql_select_db("Medieval", $con);
								$query = "SELECT id,name,power from user where id='".$id."'";
								$result=mysql_query($query,$con);
								if(!$result)die("Error 1");
								if(mysql_num_rows($result)!=0)
								{
								
								echo "User ID already exsits. Please use another ID.";
								
								}  
								else{
								echo "Information correct! Press Next to continue!<br/><br/>";
								//echo "<form name=\"start\" method=\"post\" action=\"newaccount.php\">";
								echo "<input type=\"submit\" value=\"Next\" class=\"checkuser\">";
								//echo "</form>";
							}


								mysql_close($con);
								?>