<?php

$username = $_POST["name"];
$password = $_POST["password"];

if ($username =="username" && $password=="password")
{
    session_start();
    $_SESSION['access_level_session'] = "standarduser";
}

header('Location: loggedIn.php');

?>