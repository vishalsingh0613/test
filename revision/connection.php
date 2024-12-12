<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="myphp_revision";
$link = new mysqli($server_name,$username,$password,$database_name);
if($link==true)
{
    echo "connected successfully";
}
else
{
    echo "not Connected";
}
// $sql="CREATE TABLE student(
// id int(255) PRIMARY KEY AUTO_INCREMENT,
// name varchar(255) ,
// email varchar(255),
// contact varchar(255),
// age int(255),
// img varchar(255))";
// $result=$link->query($sql);
// if($result==TRUE)
// {
//     echo "Tabele Created";

// }
// else
// {
//     echo "tabel not Created";
// }

// $sql = "CREATE TABLE student(
//     // id int(255) PRIMARY KEY AUTO_INCREMENT,
//     // name varchar(255),
//     // age int(255),
//     // rank int(255),
//     // img varchar(255)
//     // )";
//     // $result = $con->query($sql);
//     // if($result==TRUE)
//     // {
//     // echo "table Created Successfully";
//     // }
//     // else{
//     //     echo "not Created";
//     // }


?>
