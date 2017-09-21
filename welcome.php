     <?php 
     session_start();
     
     
     ?>
     <!DOCTYPE HTML>
     <html>
     <head>
     <meta charset="UTF-8">
     <title>Welcome</title>
     <style type="text/css">
     
     body {background-image:url("http://localhost/Medievalwar/img/bg4.png");
     background-repeat:no-repeat;
     
     
     
     
     /*width: 1500px;*/
     /*margin-left: 50px;
     margin-right: 50px;
     margin-top: 40px;*/
     color: white;
     font-family:  Florence, cursive; }
     /*.div3 a:hover img{filter:alpha(Opacity=70);-moz-opacity:0.7;opacity: 0.7}*/
     .logout{
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
     
     
     .div2 a:hover img{filter:alpha(Opacity=70);-moz-opacity:0.7;opacity: 0.7}
     .over a:hover img{filter:alpha(Opacity=70);-moz-opacity:0.7;opacity: 0.7}
     .div2{
     display:inline;
     
     
     }
     .over{
     position:fixed; left: 20px; bottom: 40px;
     
     
     }
     .div4{
     display:inline;
     position:fixed; right: 50px; bottom: 40px;
     
     }
     
     .div5{
     position:fixed; left: 1050px; top: 150px;
     font-size: 20px;
     
     }
     .abc {
     position:fixed; left: 1000px; top: 40px;
     font-size: 20px;
     
     
     
     }
     .png{
     opacity:0.4;
     }
     .map{
     position:fixed; left: 20px; top: 10px;
     
     }
     
     
     
     </style>
     <script type="text/javascript">
     
     function show(ci){
     
     showtab(ci);
     showcityinfo(ci);
     }
     
     function showcityinfo(ci){
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
     var url="http://localhost/Medievalwar/show_cityinfo.php?city=" + ci;
     xmlHttp.open("GET",url,true);
     xmlHttp.send(null);
     xmlHttp.onreadystatechange=function()
     {
     if(xmlHttp.readyState==4)
     {
     if(xmlHttp.status==200)
     {
     //Remember to change id !!
     cityinfo.innerHTML=xmlHttp.responseText;
     }
     else
     {
     cityinfo.innerHTML="Promblem in retrieving data: "+xmlHttp.statusText;
     }
     }
     }
     
     }
     
     
     
     
     
     function showtab(ci){
     music();
     
     
     
     //choosecity=ci;
     
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
     var url="http://localhost/Medievalwar/citytab.php?city=" + ci;
     xmlHttp.open("GET",url,true);
     xmlHttp.send(null);
     xmlHttp.onreadystatechange=function()
     {
     if(xmlHttp.readyState==4)
     {
     if(xmlHttp.status==200)
     {
     //Remember to change id !!
     info.innerHTML=xmlHttp.responseText;
     }
     else
     {
     info.innerHTML="Promblem in retrieving data: "+xmlHttp.statusText;
     }
     }
     }
     
     }
     
     function music()
     {
     //play button music
     //var mu1=document.getElementById("mu1");
     var mu2=document.getElementById("mu2");
     
     mu2.play();
     
     }
     
     </script>
     </head>
     <body>
     
     
     
     
     <embed height="100" width="100" src="http://localhost/Medievalwar/music/01.mp3" hidden="true" />
     <div class="div1" id="main">
     <IMG src="http://localhost/Medievalwar/img/map1.png" usemap="#Map" class="map"  border="0"  >
     <map name="Map">
     <area shape="circle" coords="234,240,31" href="javascript:onClick=show('aachen')">
     
     <area shape="circle" coords="347,268,30" href="javascript:onClick=show('mainz')">
     
     <area shape="circle" coords="386,324,31" href="javascript:onClick=show('worms')">
     
     <area shape="circle" coords="294,206,34" href="javascript:onClick=show('cologne')">
     <area shape="circle" coords="382,148,35" href="javascript:onClick=show('bremen')">
     <area shape="circle" coords="525,328,35" href="javascript:onClick=show('regensburg')">
     <area shape="circle" coords="508,455,31" href="javascript:onClick=show('verona')">
     <area shape="circle" coords="436,533,27" href="javascript:onClick=show('pisa')">
     <area shape="circle" coords="495,545,30" href="javascript:onClick=show('florence')">
     <area shape="circle" coords="714,349,33" href="javascript:onClick=show('vienna')">
     <area shape="circle" coords="539,618,32" href="javascript:onClick=show('rome')">
     <area shape="circle" coords="720,628,36" href="javascript:onClick=show('naples')">
     </map>
     </div>
     
     <div class="abc" >
     
     <?php
     echo"<p>Welcome ".$_SESSION["name"]."! ";
     echo"Today is ".$_SESSION["hisdate"].". ";
     
     echo "<a href=\"destroysession.php\">Log out</a></p> ";
     if(!(isset($_SESSION['id'])))
     header("Location: index.php");
     echo" You belong to ".$_SESSION["power"].".";
     
     
     ?>
     <IMG src=<?php if($_SESSION["power"]=="Duchy of Saxony") echo"http://localhost/Medievalwar/img/m2.png";
     else if($_SESSION["power"]=="Duchy of Bavaria") echo "http://localhost/Medievalwar/img/m1.png";
     else if($_SESSION["power"]=="Kingdom of Italy") echo "http://localhost/Medievalwar/img/m3.png";
     ?>  border="0" align="absmiddle" class= "png" >
     
     
     </div>
     
     
     <div class="div4">
     <p id="info">
     
     </p>
     
     </div>
     <div class="over" >
     <A href="http://localhost/Medievalwar/oderover.php"><IMG src="http://localhost/Medievalwar/img/endturn.png"  border="0" align="absmiddle" ></A>
     
     </div>  
     
     <div class="div5">
     <p id="cityinfo"></p>
     </div>
     
     <audio controls="controls" hidden="true"  id="mu2" loop="true">
     <source src="http://localhost/Medievalwar/music/button1.mp3" type="audio/mp3" />
     <source src="http://localhost/Medievalwar/music/button1.ogg" type="audio/ogg" />
     Your browser does not support this audio format.
     </audio>
     
     
     
     
     
     </body>
     </html>