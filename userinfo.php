<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'treat2tummy');

$user = $_POST['user'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$query = "insert into userinfodata (user, email, comment) 
values ('$user', '$email', '$comments') ";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');














?>