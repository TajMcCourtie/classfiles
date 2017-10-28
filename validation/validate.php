<?php ob_start();
session_start();

//checking if text is sent over from the POST and checking if textboxes are not empty
if (isset($_POST['usernme']) && isset($_POST['pwrd']) && !empty($_POST['usernme']) && !empty($_POST['pwrd'])){

    //checking values of textboxes
    if($_POST['usernme']== "Tester" && $_POST['pwrd']== "1234"){
        $_SESSION['valid'] = true;
        $_SESSION['usernme'] = $_POST['usernme'];
        $_SESSION['msg'] = "You have entered a valid username and password";
    }
    else{
        $_SESSION['msg']= "You have entered a wrong username or password";
    }

} else{
    $_SESSION['msg']= "Textboxes cannot be empty";
}

//sends the user back to the first page
header("Location:index.php");

?>