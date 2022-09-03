<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'doacademy');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = " insert into contactusinfo (name, email, message) values ('$name', '$email', '$message')";

mysqli_query($con, $query);

?>	