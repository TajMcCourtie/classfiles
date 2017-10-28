<?php
session_start();
echo "the value of the session variable username is <b>".$_SESSION['UserName']."
</b> <br>";
echo " and the value of session variable PWD is <b>".$_SESSION['PWD']."</b>";
echo "<br> <br> <b> Session variables are no longer accessible since they have been destroyed </b>";
?>