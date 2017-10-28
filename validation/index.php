<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
    .wrapper{
        width:600px;
        margin: auto auto;
        height: 400px;
        /* background: blue; */
        text-align: center;

    }
    form{
        padding: 10px;

    }
    input{
        height: 25px;
        width: 50%;
        outline: none;
        background: none;
        margin: 5px;
    }
    input[type="submit"]{
        border-radius:10px;
    }
    </style>
</head>
<body>
<div class="wrapper">
    <h3>Enter Username and Password</h3>
    <p>
    <?php 
    if(isset($_SESSION['msg'])){
     echo $_SESSION['msg'];

    }
    ?>
    </p>
    <form action="validate.php" method="POST">
        <input type="text" name="usernme" placeholder="User=Tester">
        <input type="password" name="pwrd" placeholder="password=1234">
        <input type="submit">
    </form>
</div>
<?php //print_r($_SESSION); 
?>
</body>
</html>