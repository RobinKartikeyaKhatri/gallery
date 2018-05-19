<?php require_once("init.php"); ?>

<?php

if($session->is_signed_in())
{
   redirect("index.php");
}

if(isset($_POST['submit']))
{
    $username = $database->escape_string(trim($_POST['username']));
    $password = $database->escape_string(trim($_POST['password']));


    if($user_found)
    {
        $session->login($user_found);
        redirect("index.php");
    }
    else
    {
        $message = "Your username or password are incorrect";
    }
}
else
{
    $username = "";
    $password = "";
}

?>