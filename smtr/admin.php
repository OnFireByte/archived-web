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
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <title>ADMIN</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script> 
        $.ajaxSetup({ cache: false });
        var auto_refresh = setInterval(
            function () {
                $('#1').load(window.location.href + " #1" );
            }, 500);

    </script>

    <style>
        body{
            margin:0;
            padding:0;
            font-size: 50px; 
        }
        
    </style>  

</head>  
<body>
<div class="center" >
    <center>
        <div style="font-size:50px;">ระบบคุมคิว</div>
        
        <div id="1" style="font-size:100px;">
            <div style="font-size:30px;">คิว ณ ตอนนี้ </div>
            <?php
                $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team1.txt")) + 0;
                fclose($myfiler);
                echo " - ";
                $myfiler = fopen("team2.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team2.txt")) + 0;
                fclose($myfiler);
            ?>
        </div><br>
            <?php

            if(isset($_POST['submit1'])){
                $data=$_POST['score1'];
      
                $fo = fopen("team1.txt","w");
            
                fwrite($fo,$data);
                
                $data=$_POST['score2'];
      
                $fo = fopen("team2.txt","w");
            
                fwrite($fo,$data);
            
                }
            
            ?>
            <form method="post" style="margin:0px;padding:0;" id="form1">
                <input type="number" class="form__field" placeholder="คิวแรก" name="score1" id='name1' required />
                <input type="number" class="form__field" placeholder="คิวสุดท้าย" name="score2" id='name' required /><div id="diff">0 คน</div><br>
                <input type="submit" name="submit1" value="SUBMIT" class="button minus" style="margin-left:10px;font-size:30px;padding:5px;">
            </form><br style="{display: block;content:' ';margin-top: 30px;}">
        

        
        

        <script>
                var interval = setInterval(function() {
                    var x = document.getElementById("form1").elements[0].value;
                    var y = document.getElementById("form1").elements[1].value;
                    if(x == 0 | y == 0 ) {
                        document.getElementById("diff").innerHTML = "x คน";
                    }
                    else if (y-x < 0) {
                        document.getElementById("diff").innerHTML = "โปรดใส่ค่าสุดท้ายให้มากกว่าค่าแรก";
                    }
                    else{
                        document.getElementById("diff").innerHTML = y-x+1 + " คน";
                    }
                    
                    
                }, 1000);
        </script>
        


        
        
    </center>

</div>
<a href="index.php"><button class="minus back">BACK</button></a>
</body>
</html>