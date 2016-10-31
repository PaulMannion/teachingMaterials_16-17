<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 18/11/2015
 * Time: 11:20
 */
session_start();
$accesslevel = $_SESSION['access_level_session'];
displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accessLevel)
{
    if ($accessLevel == "standarduser") {
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a standard user</p>";

    }
    elseif ($accessLevel == "root") {
        echo "<p<p style = \"background-color: red\">You are currently logged in as a root user</p>";
        echo "<p<p style = \"background-color: red\">You now have access to additional administrative features</p>";
    }
}
    ?>