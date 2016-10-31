<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 18/11/2015
 * Time: 09:43
 */

$db = new mysqli(
    "localhost",
    "blogsystem",
    "SXwyLmHhsTfqE6yP",
    "blogsystem"
);

// test if connection was established, and print any errors

if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

