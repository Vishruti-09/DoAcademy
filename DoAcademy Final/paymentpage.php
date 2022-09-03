<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'doacademy');
$amount = $_POST['amount'];
$card_name = $_POST['card_name'];
$card_number = $_POST['card_number'];
$expiration_month = $_POST['expiration_month'];
$expiration_year = $_POST['expiration_year'];
$card_cvv = $_POST['card_cvv'];
$db_amount = $_POST['db_amount'];
$db_name = $_POST['db_name'];
$db_number = $_POST['db_number'];
$db_month = $_POST['db_month'];
$db_year = $_POST['db_year'];
$db_cvv = $_POST['db_cvv']

$query = " insert into cardinfo (amount, card_name, card_number, expiration_month, expiration_year, card_cvv, db_amount, db_name, db_number, db_month, db_year, db_cvv) values ('$amount', '$card_name', '$card_number', '$expiration_month', '$expiration_year', '$card_cvv', '$db_amount', '$db_name', '$db_number', '$db_month', '$db_year', '$db_cvv')";
mysqli_query($con, $query);

?>	