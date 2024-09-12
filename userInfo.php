<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection successful";
} else {
    echo "No Connection";
}

mysqli_select_db($con, 'ubuy_data');


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $firstName;
echo $lastName;
echo $email;
echo $phone;
echo $subject;
echo $message;

$query = " insert into contact_us_list (first_name,last_name,email,phone_number,subject,message) values ('$firstName','$lastName','$email','$phone','$subject','$message') ";

mysqli_query($con, $query);

header('location:index.php');

?>