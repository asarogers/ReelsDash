<?php
//mysql://be3e1e29137712:f81aeb52@us-cdbr-east-06.cleardb.net/heroku_671f81d6999c808?reconnect=true
//$url = parse_url(getenv("mysql://be3e1e29137712:f81aeb52@us-cdbr-east-06.cleardb.net/heroku_671f81d6999c808?reconnect=true"));
//$server = $url["us-cdbr-east-06.cleardb.net"];
//$username = $url["be3e1e29137712"];
//$password = $url["f81aeb52"];
//$db = substr($url["heroku_671f81d6999c808"], 1);

//$conn = new mysqli($server, $username, $password, $db);


$server = "us-cdbr-east-06.cleardb.net";
$username = "b5d09f87f57f1b";
$password = "878a9758";
$db = "heroku_c3235b8a3c5307d";

$conn = mysqli_connect($server, $username, $password, $db) or die("database connection error");
?>
