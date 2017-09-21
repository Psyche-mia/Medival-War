
<html>
    <head>
        <meta charset="UTF-8">
        <title>NewUser</title>
                                       <style type="text/css">
body {background-image:url("http://localhost/Medievalwar/img/bg1.png");

                               background-repeat:no-repeat;
                               background-attachment: fixed;
                               background-position:50% 50%;

                               
                               
                               
                               /*position:absolute; top:-200px; bottom:0; left:0; right:0; margin:auto; height:240px; width:70%; */
                               font-family:  Florence, cursive;   
                               font-size:170%;
                                                          
      
      margin-left: 500px;
      
      margin-top: 210px;
  }
  table{font-size:90%;

  }
  .checkuser{
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



</style>
                               <script type="text/javascript">

                       function check()
                       {


                        if(check1()&&check2()&&check3())
                        {
                            var id=document.getElementById("id").value;
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
                       var url="http://localhost/Medievalwar/checkaccount2.php?id=" + id;
                       xmlHttp.open("GET",url,true);
                       xmlHttp.send(null);
                       xmlHttp.onreadystatechange=function()
                       {
                       if(xmlHttp.readyState==4)
                       {
                       if(xmlHttp.status==200)
                       {
                       //Remember to change id !!
                       warning.innerHTML=xmlHttp.responseText;
                       }
                       else
                       {
                       warning.innerHTML="Promblem in retrieving data: "+xmlHttp.statusText;
                       }
                       }
                       }
                            return true;
                        }
                        else return false;
                    
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

                       function check3()
                       {
                       var regexp=/^[a-zA-Z]{3,10}$/;
                       var name=document.getElementById("name").value;
                       
                       if(name=="")
                       {document.getElementById("a3").innerHTML=" <a style='color:red;font-style:italic;'>This field is required!</a>";}
                       else if(name.match(regexp))
                       {document.getElementById("a3").innerHTML=""; return true;}
                       else
                       document.getElementById("a3").innerHTML=" <a style='color:red;font-style:italic;'>This field is not valid!</a>";
                       }
                                                      function music()
                               {
                                                               //play button music
                               var mu1=document.getElementById("mu1");
                               var mu2=document.getElementById("mu2");
                               
                               mu2.play();

                               }
                       </script>
    </head>
    <body>
        
        <p>
        Notice:
        <ul>
        <li>User ID and password should contain character or number only.</li>
        <li>User name should be character only.</li>
        <li>User ID, name and password should be 3 to 10 character-long.</li>
        </ul>
    </p>
        <form name="login" method="post" action="newaccount.php" >
            <table border="0">
                <tr><td>UserID</td><td><input name="id" type="text" id="id"><a id="a1"></a> </td></tr>
                <tr><td>Password</td><td><input name="password" type="password" id="password"><a id="a2"></a> </td></tr>
                <tr><td>Name</td><td><input name="name" type="text" id="name"><a id="a3"></a> </td></tr>
            </table>
            <p id="warning"></p>
            <input type="button" name="submit" value="Check" onclick="check()" class="checkuser">
        </form>

    </body>
</html>