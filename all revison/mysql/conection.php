<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="bagira";

$link = new mysqli($server_name,$username,$password,$database_name);
if($link==true)
{
    echo "connection made";
}
else
{
    echo "not connected";
}
// $sql="CREATE DATABASE bagira";
// $result = $link->query($sql);
// if($result==TRUE)
// {
//     echo "Data base Created ";
// }
// else
// {
//     echo "not created";
// }

// $link->close();
// $sql="CREATE TABLE student(
// id int(255) AUTO_INCREMENT PRIMARY KEY,
// name varchar(255),
// email_id varchar(255),
// phone_number varchar(255),
// age int(255),
// img varchar(255))";
// $result=$link->query($sql);
// if($result==TRUE)
// {
//     echo "tabele Created";

// }
// else{
//     echo "not created";
// }
// $sql="INSERT INTO student(`name`,`email_id`,`phone_number`,`age`,`img`)VALUES('$name','$email','$phone','$age','$file_name')";
// $result = $link->qurey($sql);
// if($result==TRUE)
// {
//     echo "data inserted";

// }else
// {
//     echo "data not inserted";
// }
// $sql ="DROP TABLE student";
// if($link->query($sql)==TRUE)
// {
//     echo "Deleted Successfully";
// }
// else{
//     echo "not Deledted";
// }

?>
