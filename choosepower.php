     <?php 
     session_start();
     
     ?>
     <html>
     <head>
     <meta charset="UTF-8">
     <title>ChoosePower</title>
     <style type="text/css">
     body {background-image:url("http://localhost/Medievalwar/img/bg3.png");
     background-repeat:no-repeat;
     background-position:center;
     
     font-size:16px;
     
     margin-left: 30px;
     
     margin-top: 30px;
     font-family:  Florence, cursive; }
     .div1 a:hover img{filter:alpha(Opacity=70);-moz-opacity:0.7;opacity: 0.7}
     .div1 {
     display:inline;
     }
     
     .div2{
     font-size:20px;
     margin-left: 200px;
     
     margin-top: 30px;
     
     }
     .div3{
     font-size:50px;
     margin-left: 600px;
     
     margin-top: 30px;
     
     
     }
     .shadow1{
     position:fixed; bottom:20px; left:20px;
     }
     .choosefinish{
     background:url("http://localhost/Medievalwar/img/button.png") no-repeat ;
     background-position:50% 50%;
     background-size: 400px;
     width: 100px;
     height: 50px;
     border:0px;
     cursor:pointer;
     font-size:130%;
     font-family:  Florence, cursive; 
     }
     .saxony{
     position:fixed; left: 905px; top: 6px;
     }
     .bavaria{
     position:fixed; left: 1055px; top: 130px;
     }
     .italy{
     position:fixed; left: 948px; top: 175px;
     }
     
     
     </style>
     <script type="text/javascript">
     
     
     
     function show(po){
     music();
     
     
     /*if(po=="Duchy of Saxony")
     {
     
     document.body.style.backgroundImage = "url('http://localhost/Medievalwar/img/bg3a.png')";
     }
     if(po=="Duchy of Bavaria")
     {
     
     document.body.style.backgroundImage = "url('http://localhost/Medievalwar/img/bg3b.png')";
     }
     if(po=="Kingdom of Italy")
     {
     //alert("aa");
     document.body.style.backgroundImage = "url('http://localhost/Medievalwar/img/bg3c.png')";
     }*/
     
     
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
     var url="http://localhost/Medievalwar/showpower.php?power=" + po;
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
     
     
     
     <form name="login" method="post" action="welcome.php " >
     
     
     
     <div class="div1"><A href="javascript:onClick=show('Duchy of Saxony') "><IMG src="http://localhost/Medievalwar/img/m2.png"  border="0" align="absmiddle" ></A></div>
     <div class="div1"> <A href="javascript:onClick=show('Duchy of Bavaria') "><IMG src="http://localhost/Medievalwar/img/m1.png"  border="0" align="absmiddle" ></A></div>
     <div class="div1"><A href="javascript:onClick=show('Kingdom of Italy') "><IMG src="http://localhost/Medievalwar/img/m3.png"  border="0" align="absmiddle" ></A></div>
     <input type="submit" name="submit" value="Finish" class="choosefinish" >
     </form>
     
     
     
     <div class="div2">
     <h1>Welcome to Medieval War, <?php echo $_SESSION["name"];?>!</h1>
     <p>You can choose a power out of three.</p>
     <p>Click on the medal to see more information.</p>
     
     </div>
     
     <div class="div3"><p id="info"></p></div>
     
     
     <!--<IMG src="http://localhost/Medievalwar/img/s.png"  id="shadow1" class="shadow1" border="0"  >-->
     
     <!--music-->
     <audio controls="controls" hidden="true"  id="mu2">
     <source src="http://localhost/Medievalwar/music/button1.mp3" type="audio/mp3" />
     <source src="http://localhost/Medievalwar/music/button1.ogg" type="audio/ogg" />
     Your browser does not support this audio format.
     </audio>
     
     </body>
     </html>