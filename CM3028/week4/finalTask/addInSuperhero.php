<?
include('db_connect.php');
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$canfly = $_POST["canfly"];
$zappy = $_POST["zapper"];
$sarcasm = $_POST["sarcasm"];

$sql = "INSERT INTO superherotask  (firstName, lastName, dob, gender, fly, zap, sarcastic)
 VALUES ('$firstname ', '$lastname', '$dob', '$gender', '$canfly', '$zappy', '$sarcasm')";

$result = $db->query($sql);

header('Location: index.html');

?>