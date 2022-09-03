<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'doacademy');
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$addresstype = $_POST['addresstype'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$book_desc = $_POST['book_desc'];
$book_price = $_POST['book_price'];
$pdf = $_POST['pdf'];

$query = " insert into sellerinfo (name, mobile, email, addresstype, address, city, state, book_name, author_name, book_desc, book_price, pdf) values ('$name', '$mobile', '$email', '$addresstype', '$address', '$city', '$state', '$book_name', '$author_name', '$book_desc', '$book_price', '$pdf')";

mysqli_query($con, $query);

?>	