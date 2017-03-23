

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minu esimene leht!</title>
</head>

<body>
    
    <script src="script.js" type="text/javascript">tere()</script>
    
        document.write("Tere neljapäevast<br>");
        window.onload = function () {
          var date = new Date();
            var time = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
            document.getElementsByTagName('div')[0].innerHTML = "Kell JS "+time;
            window.setTimeout(arguments.callee,1000);
        }
    
</script>
    
    
<?php

// require_once('mysql.php');
require ('/function.php');
require('menu.php');
    
greeting("hommikust");
echo "<div></div>";
aeg();
    
       
menu($menu_begin,$menu_arr,$menu_end);    

/*
connect($conn);
my_query($conn);
my_close($conn);
*/

    
counter();  
GetUserIp();
    

?> 
</body>
</html>

