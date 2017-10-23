<?php
setcookie("user_name","Cooks", time()+1000,'/'); //expires after 60 seconds
echo "the cookie has been set for 60 seconds";
?>