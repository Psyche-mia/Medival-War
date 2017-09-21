
				<html>
				<head>
				<meta charset="UTF-8">
				<title>Welcome</title>
				<style type="text/css">
				body {background-image:url("http://localhost/Medievalwar/img/bg1.png");
				background-repeat:no-repeat;
				background-position:center;

				font-family:  Florence, cursive; }

				.logout{
					position:fixed; left: 500px; top: 200px;

				}
				
				</style>
				</head>
				<body>
				<div class="logout">
				<?php
				
				session_start();
				session_destroy();
				echo "<h1>You have logged out. Bye!</h1><br/><br/>";
				echo "<br><a href=\"index.php\">Click here to login page.</a> ";
				
				
				
				?>
				</div>
				
				
				
				
				
				</body>
				</html>}}