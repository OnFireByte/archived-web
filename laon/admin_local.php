
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script> 
        var auto_refresh = setInterval(
            function () {
                $('#1').load(window.location.href + " #1" );
                $('#2').load(window.location.href + " #2" );
                $('#3').load(window.location.href + " #3" );
                $('#4').load(window.location.href + " #4" );
            }, 500);

        var auto_refresh = setInterval(
            function () {
                //jQuery.get('http://onfirebytelaon.tk/danger.txt', function(data) {
                jQuery.get('http://localhost/laon/danger.txt', function(data) {
                    if( data == 1) {
                        var danger = document.getElementById("body");
                        danger.style.background= "#590008";   
                    }
                    else if( data == 0) {
                        var danger = document.getElementById("body");
                            danger.style.background= "#1c2027";   
                    }
                });
        },100);
    </script>

    <style>
        body{
            font-size: 50px; 
        }
        .center{
            width: 500px;
        }
    </style>  

</head>  
<body id="body">
<div class="center" >
    <center>
        <div style="font-size:30px;">*** DON'T REFRESH PAGE!!! REFRESH = RESET SCORE ***</div>
        <div style="float:left; color: #d85560;">TEAM 1 - </div> 
        <div id="1" style="color:#d85560;">
            <?php
                $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team1.txt")) + 0;
                fclose($myfiler);
            ?>
        </div>
            <?php

            if(isset($_POST['submit1'])){
                $data=$_POST['score1'];
      
                $fo = fopen("team1.txt","w");
            
                fwrite($fo,$data);
            
            
                }
            
            ?>
            <form method="post" style="margin:0px;padding:0;">
                <input type="number" class="form__field" placeholder="SCORE" name="score1" id='name' required />
                <input type="submit" name="submit1" value="SUBMIT" class="button minus" style="margin-left:10px;font-size:30px;padding:5px;">
            </form><br style="{display: block;content:' ';margin-top: 30px;}">
        

        <div style="float:left; color: #87c758;">TEAM 2 - </div> 
        <div id="2" style="color:#87c758;">
            <?php
                $myfiler = fopen("team2.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team2.txt")) + 0;
                fclose($myfiler);
            ?>
        </div>
        <div class="form__group field">
            <?php

            if(isset($_POST['submit2'])){
                $data=$_POST['score2'];
      
                $fo = fopen("team2.txt","w");
            
                fwrite($fo,$data);
            
            
                }
            
            ?>
            <form method="post">
                <input type="number" class="form__field" placeholder="SCORE" name="score2" id='name' required />
                <input type="submit" name="submit2" value="SUBMIT" class="button minus" style="margin-left:10px;font-size:30px;padding:5px;">
            </form><br style="{display: block;content:' ';margin-top: 30px;}">
        </div>
        

        <div style="float:left; color: #e3aa41;">TEAM 3 - </div> 
        <div id="3" style="color: #e3aa41;">
            <?php
                $myfiler = fopen("team3.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team3.txt")) + 0;
                fclose($myfiler);
            ?>
        </div>
        <div class="form__group field">
            <?php

            if(isset($_POST['submit3'])){
                $data=$_POST['score3'];
      
                $fo = fopen("team3.txt","w");
            
                fwrite($fo,$data);
            
            
                }
            
            ?>
            <form method="post">
                <input type="number" class="form__field" placeholder="SCORE" name="score3" id='name' required />
                <input type="submit" name="submit3" value="SUBMIT" class="button minus" style="margin-left:10px;font-size:30px;padding:5px;">
            </form><br style="{display: block;content:' ';margin-top: 30px;}">
        </div>
        
        
        <div style="float:left; color:#46a2ee;">TEAM 4 - </div> 
        <div id="4" style="color:#46a2ee;">
            <?php
                $myfiler = fopen("team4.txt", "r") or die("Unable to open file!");
                echo fread($myfiler,filesize("team4.txt")) + 0;
                fclose($myfiler);
            ?>
        </div>
        <div class="form__group field">
            <?php

            if(isset($_POST['submit4'])){
                $data=$_POST['score4'];
      
                $fo = fopen("team4.txt","w");
            
                fwrite($fo,$data);
            
            
                }
            
            ?>
            <form method="post">
                <input type="number" class="form__field" placeholder="SCORE" name="score4" id='name' required />
                <input type="submit" name="submit4" value="SUBMIT" class="button minus" style="margin-left:10px;font-size:30px;padding:5px;">
            </form><br style="{display: block;content:' ';margin-top: 30px;}">
        </div>


        <?php 
        if(array_key_exists('reset', $_POST)) { 
            $myfile = fopen("team1.txt", "w") or die("Unable to open file!");
            fwrite($myfile, "0");
            fclose($myfile);
            $myfile = fopen("team2.txt", "w") or die("Unable to open file!");
            fwrite("0", $txt);
            fclose($myfile);
            $myfile = fopen("team3.txt", "w") or die("Unable to open file!");
            fwrite("0", $txt);
            fclose($myfile);
            $myfile = fopen("team4.txt", "w") or die("Unable to open file!");
            fwrite("0", $txt);
            fclose($myfile);
        } 
        if(array_key_exists('danger', $_POST)) { 
            $myfile = fopen("danger.txt", "w") or die("Unable to open file!");
            fwrite($myfile, "1");
            fclose($myfile);
        }
        if(array_key_exists('notdanger', $_POST)) { 
            $myfile = fopen("danger.txt", "w") or die("Unable to open file!");
            fwrite($myfile, "0");
            fclose($myfile);
        }
        ?>

        <form method="post"> 
            <input type="submit" name="reset" class="button" value="RESET !" style="font-size:30px;" /><br>
            <input type="submit" name="danger" class="button" value="DANGER !" style="font-size:30px;background-color:#c20414;color:white;box-shadow: 0px 8px 0px #8a000c;" />
            <input type="submit" name="notdanger" class="button" value="NORMAL !" style="font-size:30px;" />
        </form>

        
        
    </center>

</div>
<a href="index.php"><button class="minus back">BACK</button></a>
</body>
</html>