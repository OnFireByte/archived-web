<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="/favicon.ico"/>
    <title>สอกอ สอยดาว</title>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script> 
        $.ajaxSetup({ cache: false });
        var auto_refresh = setInterval(
            function () {
                $('#1').load(window.location.href + " #1" );  
            }, 2000);

        Notification.requestPermission();
        

    </script>

    <style>
        body{
            font-size: 8vw; 
        }
        .center{
            width: 850px;
        }
        .nav{
            width:100%;
            position:fixed;
            top:0;
            padding:20px;
            background-image: linear-gradient(to bottom, rgba(255,255,255,1), rgba(255,255,255,1) 50%, rgba(255,255,255,0));
        }
        
    </style>  

</head>  
<body >
<div class="nav"><div style="font-size:8vh;"><img src="logo.png" alt="" width="120vw" >&nbsp&nbsp  x  &nbsp&nbsp<img src="logo2.png" alt="" width="120vw" ></div></div>
    <center>
    
        <div class="content">
        <div style="font-size:6vw;" >คิวตอนนี้คือ</div> 
         <div style="font-size:15vw;" id=1>   <?php
                $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
                echo "<div style='display:inline;' id='firstnum'>" . fread($myfiler,filesize("team1.txt")) . "</div>";
                echo " - ";
                $myfiler = fopen("team2.txt", "r") or die("Unable to open file!");
                echo "<div style='display:inline;' id='secnum'>" . fread($myfiler,filesize("team2.txt")) . "</div>";
                fclose($myfiler);
            ?></div>
        <div style="font-size:4vw;">หากถึงคิวของท่านโปรดมาภายใน 5 นาที มิฉะนั้นจะถือว่าสละสิทธ์ <br>แนะนำให้ท่านมาก่อนก่อนคิวตัวเองประมาณ 15-20 คิว </div>
    </div>

    <div style="font-size:3vw;margin-top:5vw;">ระบบแจ้งเตือนคิว : คุณสามารถใส่คิวของคุณเพื่อรับการแจ้งเตือน <br> <font style="font-size:2vw;margin-top:0;color:red;">Disclaimer : ระบบอาจใช้ไม่ได้กับโทรศัพท์บางเครื่อง แนะนำให้หมั่นเช็คหน้าเว็บเอง</font></div>

    <form style="font-size:3vw;margin-top:0;">
        
        <input style="font-size:3vw;margin-top:0;" class="form__field" placeholder="ใส่คิวของคุณ" type="number" id="nameBox" name='usrname' required >
        <input style="font-size:3vw;padding:4px" class="button" type="submit" value="แจ้งเตือนคิว!" id="submit" onclick="putCookie(document.getElementsByTagName('form'));">
    </form>
<div style="font-size:3vw;margin-top:2vw;" id="queue"></div>
    </center>


    <script>
    
        var today = new Date();
        var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

        function setCookie(name, value) {
            document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
        }
        function putCookie(form) {
            //this should set the UserName cookie to the proper value;

            setCookie("userName", form[0].usrname.value);
            ReadCookie();
            return true;
        }
  
  
  function ReadCookie() {
               var allcookies = document.cookie;
               // Get all the cookies pairs in an array
               cookiearray = allcookies.split(';');
               // Now take key value pair out of this array
               for(var i=0; i<cookiearray.length; i++) {
                  name = cookiearray[i].split('=')[0];
                  value = cookiearray[i].split('=')[1];
                  document.getElementById("queue").innerHTML = "คิวของคุณคือ " + value;
               }
            }
        


    var q_auto = setInterval(
            function () {
                var firstnum = parseInt(document.getElementById('firstnum').innerText, 10);
                var secnum = parseInt(document.getElementById('secnum').innerText, 10);
                var allcookies = document.cookie;
               // Get all the cookies pairs in an array
               cookiearray = allcookies.split(';');
               // Now take key value pair out of this array
               for(var i=0; i<cookiearray.length; i++) {
                  name = cookiearray[i].split('=')[0];
                  q_number = cookiearray[i].split('=')[1];
                }
                document.getElementById("queue").innerHTML = "คิวของคุณคือ " + q_number;

                

                if ( q_number >= firstnum && q_number <= secnum) {
                    navigator.serviceWorker.register('sw.js');
                    Notification.requestPermission().then( function( permission ) {
                        if ( permission != "granted" ) {
                            document.getElementById("queue").innerHTML = "ถึงคิวของคุณแล้ว (" + q_number + ")";
                            clearInterval(q_auto);
                            return;
                        }

                        navigator.serviceWorker.ready.then( function( registration ) {
                            registration.showNotification( "ซุ้มสอยดาวถึงคิวของคุณ", { body:"ซุ้มสอยดาวถึงคิวของคุณแล้ว โปรดมาภายใน 5 นาที" } );
                            document.getElementById("queue").innerHTML = "ถึงคิวของคุณแล้ว (" + q_number + ")";
                            clearInterval(q_auto);
                        } );

                    } );
            }
    }, 1000);
    </script>


</body>
</html>