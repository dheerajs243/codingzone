<?php

$servername="localhost";
$username="root";
$password="";
$dbname="club";
// $dnname="contactus";

// if($_SERVER['REQUEST_METHOD']=='POST'){
// $first=$_POST['f_name'];
// $last=$_POST['l_name'];
// $mobile=$_POST['phone'];
// $emailid=$_POST['email'];
// $state=$_POST['state'];
// $messg=$_POST['msg'];


$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "The server onnection created succesfully";
}
else{
    die ("We are facing some technical issue and we are sorry for this:".mysqli_connect_error($conn));
}


}


?>