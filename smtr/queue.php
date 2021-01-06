<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAM1</title>
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
        }
        #count {
            font-size: 100px; 
        }
        .button{
            backgroud-color: #d85560;
        }
    </style>  

</head>
<body>
<?php
$password = "sk139";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

<div class="center">
    <center><div>คิว ณ เวลานี้ </div><br>
    <div id="count">
    <?php
        $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
        echo fread($myfiler,filesize("team1.txt")) + 0;
        fclose($myfiler);
    ?>
    </div><br>
    <?php
        
        if(array_key_exists('plusone', $_POST)) { 
            $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
            $txt = fread($myfiler,filesize("team1.txt")) + 1;
            fclose($myfiler);
            $myfile = fopen("team1.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);
        }
        else if(array_key_exists('plusfive', $_POST)) { 
            $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
            $txt = fread($myfiler,filesize("team1.txt")) + 5;
            fclose($myfiler);
            $myfile = fopen("team1.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);
        
        }else if(array_key_exists('minusone', $_POST)) { 
            $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
            $txt = fread($myfiler,filesize("team1.txt")) - 1;
            fclose($myfiler);
            $myfile = fopen("team1.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);
        
        }else if(array_key_exists('minusfive', $_POST)) { 
            $myfiler = fopen("team1.txt", "r") or die("Unable to open file!");
            $txt = fread($myfiler,filesize("team1.txt")) - 5;
            fclose($myfiler);
            $myfile = fopen("team1.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $txt);
            fclose($myfile);
        
        } else if(array_key_exists('reset', $_POST)) { 
            $myfile = fopen("team1.txt", "w") or die("Unable to open file!");
            fwrite("0", $txt);
            fclose($myfile);
        } 
    ?> 
  
    <form method="post"> 
        <input type="submit" name="plusone" class="button" value="+ 1 Q" />
        <input type="submit" name="plusfive" class="button" value="+ 5 Q" /><br>
        <input type="submit" name="minusone" class="button minus" value="- 1 Q" />
        <input type="submit" name="minusfive" class="button minus" value="-5 Q" /> 
    </form> </center>
</div>

<?php
      exit;
   } else {
      echo "Bad Cookie.";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['keypass'] != $password) {
      echo "Sorry, that password does not match.";
      exit;
   } else if ($_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "Sorry, you could not be logged in at this time.";
   }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
<label><input type="text" name="user" id="user" /> Name</label><br />
<label><input type="password" name="keypass" id="keypass" /> Password</label><br />
<input type="submit" id="submit" value="Login" />
</form>

</body>
</html>