<?php

$con = mysqli_connect('localhost','root', "");

$database = mysqli_select_db($con, 'doacademy');

if(isset($_POST['insert'])){

$full_name = $_POST['full_name'];
$birth_date = $_POST['birth_date'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$user = $_POST['user'];
$id_type = $_POST['id_type'];
$id_number = $_POST['id_number'];
$address =$_POST['address'];
$nationality = $_POST['nationality'];
$flat_no = $_POST['flat_no'];
$building = $_POST['building'];
$district = $_POST['district'];
$city = $_POST['city'];
$state = $_POST['state'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$spouse_name = $_POST['spouse_name'];

$query = " insert into signin (full_name, birth_date, mobile, email, password, gender, user, id_type, id_number, adrress, nationality, flat_no, building, district, city, state, father_name, mother_name, spouse_name) values ('$full_name', '$birth_date', '$mobile', '$email', '$password', '$gender', '$user', '$id_type', '$id_number', '$address', '$nationality', '$flat_no', '$building', '$district', '$city', '$state', '$father_name', '$mother_name', '$spouse_name')";

$query_run = mysqli_query($con, $query);

if($query_run)
{
	echo ' <script type="text/javascript"> alert("Data Saved") </script> ';
}
else{
	echo ' <script type="text/javascript"> alert("Data Not Saved") </script> ';
}

}

?>	