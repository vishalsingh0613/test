<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="my_recall";
$pass= new mysqli($server_name,$username,$password,$database_name);
if($pass==TRUE)
{
    echo "Link Has Establised Successfully";
}
else
{
    echo "Not Linked";
}
// $sql="CREATE TABLE student(
//     id int(255) PRIMARY KEY AUTO_INCREMENT,
//     email varchar(255),
//     age varchar(255)


// )";
// $result=$pass->query($sql);
// if($result==TRUE)
// {
//     echo "Table Created Successfully";

// }
// else
// {
//     echo "Not Created";
// }



?>