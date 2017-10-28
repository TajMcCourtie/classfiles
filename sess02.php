<?php
session_start();//tells the application to start a session
//A session enables applications to pass data values across php pages

$_SESSION['UserName']= $_POST['txtNum1']; //value from txtNum1 textbox is stored in UserName session variable
$_SESSION['PWD']= $_POST['txtNum2']; //value from txtNum2 textbox is stored in PWD session variable

?>

<html>
<body>
<br>
The username entered in the textbox <b>txtNum1</b> is now stored in the session variable<b>
UserName</b>
<br>The password entered in the textbox <b>
txtNum2</b> is now stored in the session variable<b> PWD</b>
<br><br>
<a href='sess03.php'>Click here to see content of the session variables on a new page</a>
</body>
</html>