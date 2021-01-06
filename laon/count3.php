<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAM3</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script> 
        var auto_refresh = setInterval(
function () {
    $('#count').load(window.location.href + " #count" );
}, 50);
    </script>

    <style>
        *{
            font-size: 30px; 
            margin:0;
            padding:0;
            color:#e3aa41;
        }
        #count {
            font-size: 100px; 
        }
        .button{
            backgroud-color: #e3aa41;
        }
    </style>  

</head>
<body>

<div class="center">
    <center><div>TEAM THREE </div><br>
    <div id="count">
    <?php
        $myfiler = fopen("team3.txt", "r") or die("Unable to open file!");
        echo fread($myfiler,filesize("team3.txt")) + 0;
        fclose($myfiler);
    ?>
    </div><br>
    <?php
        
        if(array_key_exists('plusone', $_POST)) { 
            $myfiler = fopen("team3.txt", "r") or die("Unable to open file!");
            $txt = fread($myfiler,filesize("team3.txt")) + 1;
            fclose($myfiler);
            $myfile = fopen("team3.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);
        }
        else if(array_key_exists('plusfive', $_POST)) { 
            $myfiler = fopen("team3.txt", "r") or die("Unable to open file!");
            $txt = fread($myfiler,filesize("team3.txt")) + 5;
            fclose($myfiler);
            $myfile = fopen("team3.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);
        
        }else if(array_key_exists('minusone', $_POST)) { 
            $myfiler = fopen("team3.txt", "r") or die("Unable to open file!");
            $txt = fread($myfiler,filesize("team3.txt")) - 1;
            fclose($myfiler);
            $myfile = fopen("team3.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);
        
        }else if(array_key_exists('minusfive', $_POST)) { 
            $myfiler = fopen("team3.txt", "r") or die("Unable to open file!");
            $txt = fread($myfiler,filesize("team3.txt")) - 5;
            fclose($myfiler);
            $myfile = fopen("team3.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);
        
        } else if(array_key_exists('reset', $_POST)) { 
            $myfile = fopen("team3.txt", "w") or die("Unable to open file!");
            fwrite("0", $txt);
            fclose($myfile);
        } 
    ?> 
  
    <form method="post"> 
        <input type="submit" name="plusone" class="button" value="PLUS ONE !" /><br>
        <input type="submit" name="plusfive" class="button" value="PLUS FIVE !!!" /><br>
        <input type="submit" name="minusone" class="button minus" value="MINUS ONE !" /><br>
        <input type="submit" name="minusfive" class="button minus" value="MINUS FIVE !!!" /> 
    </form> </center>
</div>
<a href="index.php"><button class="minus back">BACK</button></a>
</body>
</html>