<?php
Session_start();
echo "the values of the session variable username is <b>".$_SESSION['UserName']."
<b><br>";
echo " and the value of session variable PWD is <b>".$_SESSION['PWD']."</b";

session_destroy(); //session_destroy() kills all the session variables that have been created previously
?>

<html>
<body>
<br>
   
   <br><br>
   <a href='sess04.php'>Click here to see content of the session variables
    on a new page after session_destroy() as been executed </a>
    
</body>
<html>
