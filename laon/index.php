<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAV</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script> 
        var auto_refresh = setInterval(
function () {
    $('#count').load(window.location.href + " #count" );
}, 1000);
    </script>

    <style>
        *{
            font-size: 40px; 
            margin:0;
            padding:0;
            color:#cbd1db;
            line-height: 100%;
        }
        a{
            text-decoration: none;
            margin:10px;
        }
        a:hover {
            text-decoration: line-through;
        }
        br{
            margin-top: 10px;
        }
    </style>  

</head>
<body>

<div class="center">
<center>
        <a href="scoreboard.php"> #SCOREBOARD</a><br>
        <a href="admin.php" style="color:#6c7178;"> #ADMIN</a>
        <br>------------<br>
        -TEAM COUNTER-<br>
        <a href="count1.php" style="color:#d85560;"> #TEAM 1</a><br>
        <a href="count2.php" style="color:#87c758;"> #TEAM 2</a><br>
        <a href="count3.php" style="color:#e3aa41;"> #TEAM 3</a><br>
        <a href="count4.php" style="color:#46a2ee;"> #TEAM 4</a><br>
</center>
</div>

</body>
</html>