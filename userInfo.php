<?php

//this line create connection with backend and use that database
$con = mysqli_connect('localhost', 'root','','ubuy_data');  


// this checks if connection is established or not 
if ($con) {
    echo "Connection successful";
} else {
    echo "No Connection: " . mysqli_connect_error();
    exit();
}

// to fetch data from contact form and mysqli_real_escape_string  prevent from sql injection

$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$message = mysqli_real_escape_string($con, $_POST['message']);


// prevent from sql injection prepare and bind_param is used to no directly insert data into query 
$query = $con->prepare("INSERT INTO contact_us_list (first_name,last_name,email,phone_number,subject,message) VALUES (?,?,?,?,?,?)");
$query->bind_param("ssssss",$firstName,$lastName,$email,$phone,$subject,$message);


// this condition execute the query to insert data into the database
if($query->execute()){
    echo " Data successfully inserted!";
}else{
    echo "Error: " . $query->error;
}

// this line close the query and database connection  

$query->close();
$con->close();

// redirect to home page 
header('location:index.php');
// finally exit from file when everything is executed 
exit();
?>