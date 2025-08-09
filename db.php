<?php
$host="localhost"
$user="root"
$pass=""

$conn= new mysql($hoat, $user, $pass)

if ($conn-> connect_error){
 die ("connection failed: " $conn->connect_error);
}
?>