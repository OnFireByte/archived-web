<?php 
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
date_default_timezone_set('Asia/Bangkok');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOREBOARD</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script> 
        $.ajaxSetup({ cache: false });
        var auto_refresh = setInterval(
            function () {
                $('#1').load(window.location.href + " #1" );
                $('#2').load(window.location.href + " #2" );
                $('#3').load(window.location.href + " #3" );
                $('#4').load(window.location.href + " #4" );   
            }, 500);

        var auto_refresh = setInterval(
            function () {
            jQuery.get('http://onfirebytelaon.tk/danger.txt', function(data) {
            //jQuery.get('http://localhost/laon/danger.txt', function(data) {
                if( data == 1) {
                        var hidden = document.getElementById("hidden");
                        var danger = document.getElementById("danger");
                        hidden.style.display = "none";
                        danger.style.display = "block";   
                }
                else if( data == 0) {
                        var hidden = document.getElementById("hidden");
                        var danger = document.getElementById("danger");
                        hidden.style.display = "block";
                        danger.style.display = "none";
                }
                });

            jQuery.get('http://onfirebytelaon.tk/time.txt', function(data) {
            //jQuery.get('http://localhost/laon/time.txt', function(data) {
                var date = new Date();
                var hr = date.getHours();
                var m = date.getMinutes();
                var s = date.getSeconds();
                var timenow = hr*3600 + m*60 + s;
                var countdown = data - timenow;
                var countdownm = Math.floor(countdown/60)
                var countdowns = countdown%60
                if (countdown >= 0){
                    document.getElementById("demo").style.display = "block";
                    document.getElementById("demo").innerHTML = countdownm +":"+ countdowns; 
                }
                else{
                    document.getElementById("demo").style.display = "none";
                }
            });
                        
        },100);

        

    </script>

    <style>
        body{
            font-size: 110px; 
            margin:10px;
        }
        .center{
            width: 850px;
        }
        .danger{
            background:#c20414;
            position: absolute;
            top:0px;
            right:0px;
            bottom:0px;
            left:0px;
            height:100vh;
            width:100vw;
            display:none;
            font-size:200px;
            color:white;
        }
        .blinking{
            animation:blinkingText 2s infinite;
        }
        br {
            margin-top: 20px; /* change this to whatever height you want it */
        }
        @keyframes blinkingText{
            0%{     color: #000;    }
            50%{    color: #000; }
            55%{    color: transparent; }
            95%{    color:transparent;  }
            100%{   color: #000;    }
        }
    </style>  

</head>  
<body >
<div class="danger blinking" id="danger"><div class="center" ><center>DANGER</center></div></div>
<div class="center" >
    <center id="hidden">
        <div id="demo"></div><br>

        <div style="float:left; color: #d85560;">TEAM 1 - </div> 
        <div id="1" style="color:#d85560;">
            <?php
                $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team1.txt")) + 0;
                fclose($myfiler);
            ?>
        </div><br>

        <div style="float:left; color: #87c758;">TEAM 2 - </div> 
        <div id="2" style="color:#87c758;">
            <?php
                $myfiler = fopen("team2.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team2.txt")) + 0;
                fclose($myfiler);
            ?>
        </div><br>

        <div style="float:left; color: #e3aa41;">TEAM 3 - </div> 
        <div id="3" style="color: #e3aa41;">
            <?php
                $myfiler = fopen("team3.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team3.txt")) + 0;
                fclose($myfiler);
            ?>
        </div><br>
        
        <div style="float:left; color:#46a2ee;">TEAM 4 - </div> 
        <div id="4" style="color:#46a2ee;">
            <?php
                $myfiler = fopen("team4.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team4.txt")) + 0;
                fclose($myfiler);
            ?>
        </div>
        
        

    </center>

</div>
</body>
</html>