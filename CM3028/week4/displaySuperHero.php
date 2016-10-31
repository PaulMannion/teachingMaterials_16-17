<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$canfly = $_POST["canfly"];
$zappy = $_POST["zapper"];
$sarcasm = $_POST["sarcasm"];

echo "Superhero is called: " . $firstname . " " . $lastname ."<br>";
echo "Date of birth is " . $dob . "<br>";
echo "Gender is " . $gender . "<br>";
if ($canfly=="on")
{
    echo "Superhero can fly<br>";
}
if ($zappy=="on")
{
    echo "Superhero can zap things with their eyes<br>";
}
if ($sarcasm=="on")
{
    echo "Superhero is sarcastic. Apparently.<br>";
}

?>
</body>
</html>