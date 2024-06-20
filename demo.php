<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$full_name=$_POST['name'];
$gmail=$_POST['email'];
$var_phone=$_POST['phone'];
$var_cateogry=$_POST['cateogry'];
$var_date=$_POST['date'];
$var_message=$_POST['message'];




// $name=$_POST['name1'];
// $twiter=$_POST['Twitter'];
// $comment=$_POST['comment'];

$servername="localhost";
$username="root";
$password="";
$database="barber_shop";

// appointment section
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("sorry:".mysqli_connect_error());

}
else{
    

    $sql= "INSERT INTO `appointment_section` (`id`, `full_name`, `email`, `phone`, `category`, `app_date`, `message`, `date`, `time`) VALUES ('0', '$full_name', '$gmail', '$var_phone', '$var_cateogry', '$var_date', '$var_message', '', current_timestamp())";
    $result= mysqli_query($conn, $sql);
    // $sql= "INSERT INTO `user_reviews`(`id`, `name`, `twiter_id`, `comment`, `date`, `time`) VALUES ('','$name','$twiter','$comment','','')";
    // $result= mysqli_query($conn,$sql);


}
}

   header("location:index.php");
?>