                               <?php
                               session_start();
                               if(isset($_SESSION['id']))
                               header("Location: welcome.php");
                               ?>
                               <html>
                               <head>
                               <meta charset="UTF-8">
                               <title>Login</title>
                               <style type="text/css">
                               body {background-image:url("http://localhost/Medievalwar/img/bg1.png");
                               
                               
                               background-repeat:no-repeat;
                               background-attachment: fixed;
                               background-position:50% 50%;

                               
                               
                                          
                                          /*position:absolute; top:-200px; bottom:0; left:0; right:0; margin:auto; height:240px; width:70%; */
                                          font-family:  Florence, cursive;  
                                                                       /*font-family: Georgia, serif;*/
                                          }
                                          .war{
                                                color: red;
                                          }

                                          .center{
                                          /*text-align: center;*/
                                          /*width: 960px;*/
                                          margin-left: 500px;
                                          margin-right: 200px;
                                          margin-top: 240px;
                                          /*margin-right: 30%;*/
                                          
                                          font-size:250%;
                                          }
                                              table{
                                                font-size:80%;
                                          }

                             
                                          .button1{
                                          
                                           background:url("http://localhost/Medievalwar/img/button.png") no-repeat ;
                                          background-position:50% 50%;
                                          background-size: 400px;
                                          width: 250px;
                                          height: 50px;
                                          border:0px;
                                          cursor:pointer;
                                          font-size:70%;
                                          font-family:  Florence, cursive; 
                                          }
                                          
                                          .button2{
                                              background:url("http://localhost/Medievalwar/img/button.png") no-repeat ;
                                          background-position:50% 50%;
                                          background-size: 400px;
                                          width: 250px;
                                          height: 50px;
                                          border:0px;
                                          cursor:pointer;
                                          font-size:70%;
                                          font-family:  Florence, cursive; 
                                          }
                                          
                                          .button3{
                                                       background:url("http://localhost/Medievalwar/img/button.png") no-repeat ;
                                          background-position:50% 50%;
                                          background-size: 400px;
                                          width: 250px;
                                          height: 50px;
                                          border:0px;
                                          cursor:pointer;
                                          font-size:70%;
                                          font-family:  Florence, cursive; 
                                          }
                                          .shadow{
                                          position:absolute;
                                          top:50;
                                          width:340;
                                          left:456;
                                          filter:shadow(color=#ee3366,direction=125);
                                          }
                                          
                                          
                               
                               </style>
                               <script type="text/javascript">

                               function music()
                               {
                                                               //play button music
                               var mu1=document.getElementById("mu1");
                               var mu2=document.getElementById("mu2");
                               
                               mu2.play();

                               }
                               function ajaxFunction()
                               {

                               music();
                               var id=document.getElementById("id").value;
                               var pwd=document.getElementById("password").value;
                               
                               
                               if(check1()&&check2())
                               {
                               var xmlHttp=null;
                               try
                               {//       Firefox, Opera 8.0+, Safari, IE7
                               xmlHttp=new XMLHttpRequest();
                               }
                               catch(e)
                               {// Old IE
                               try
                               {
                               xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                               }
                               catch(e)
                               {
                               alert ("Your browser does not support XMLHTTP!");
                               return;  
                               }
                               }
                               
                               
                               //Remember to change direction!!
                               var url="http://localhost/Medievalwar/checkaccount.php?id=" + id+"&pwd="+pwd;
                               xmlHttp.open("GET",url,true);
                               xmlHttp.send(null);
                               xmlHttp.onreadystatechange=function()
                               {
                               if(xmlHttp.readyState==4)
                               {
                               if(xmlHttp.status==200)
                               {
                               
                               warning.innerHTML=xmlHttp.responseText;
                               }
                               else
                               {
                               warning.innerHTML="Promblem in retrieving data: "+xmlHttp.statusText;
                               }
                               }
                               }
                               
                               }
                               }
                               function check1()
                               {  var id=document.getElementById("id").value;
                               var regexp=/^([a-zA-Z]|[0-9]){3,10}$/;
                               
                               if(id=="")
                               {document.getElementById("a1").innerHTML=" <a style='color:red;font-style:italic;'>This field is required!</a>";}
                               else if(id.match(regexp))
                               {document.getElementById("a1").innerHTML=""; return true;}
                               else
                               document.getElementById("a1").innerHTML=" <a style='color:red;font-style:italic;'>This field is not valid!</a>";
                               }
                               
                               function check2()
                               {
                               var regexp=/^([a-zA-Z]|[0-9]){3,10}$/;
                               var pwd=document.getElementById("password").value;
                               
                               if(pwd=="")
                               {document.getElementById("a2").innerHTML=" <a style='color:red;font-style:italic;'>This field is required!</a>";}
                               else if(pwd.match(regexp))
                               {document.getElementById("a2").innerHTML=""; return true;}
                               else
                               document.getElementById("a2").innerHTML=" <a style='color:red;font-style:italic;'>This field is not valid!</a>";
                               }
                               </script>
                               </head>
                               <body>

                               <div class="center">

                               

                               <div class="box1">
                               <form name="login" method="post" >
                               <table class="table1" border="0">
                               <tr><td>UserID</td><td><input name="id" type="text" id="id"><a id="a1"></a> </td></tr>
                               <tr><td>Password</td><td><input name="password" type="password" id="password"><a id="a2"></a> </td></tr>
                               </table>
                               <input type="button" name="submit" value="Login" onclick="ajaxFunction()" class="button1">
                               </form>
                               </div>


                               <p id="warning" class="war"></p>
                               <form action="newuser.php">
                               <p>If you are a new player, please create a new account here!</p>
                               <input type="submit" value="New user" onclick="music()" class="button2">
                               </form>

                               </div>

                               <!-- music-->

                               <!--<audio controls="controls" hidden="true" autoplay="autoplay" id="mu1">
                               <source src="http://localhost/Medievalwar/music/01.mp3" type="audio/mp3" />
                               <source src="http://localhost/Medievalwar/music/01.ogg" type="audio/ogg" />
                               Your browser does not support this audio format.
                               </audio>-->


                               <audio controls hidden="true"  id="mu2">
                               <source src="http://localhost/Medievalwar/music/button1.mp3" type="audio/mp3" />
                               <source src="http://localhost/Medievalwar/music/button1.ogg" type="audio/ogg" />
                               Your browser does not support this audio format.
                               </audio>
                               
                               </body>
                               </html>