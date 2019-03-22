<?php

session_start();

$con = mysqli_connect("localhost","root","1234567");
mysqli_select_db($con, 'userregistration' );

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FROM `user_table` where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg= " insert into `user_table`(name , password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful ";
}

?>