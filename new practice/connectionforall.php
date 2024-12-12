<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="vishalsingh_negi";
$pass=new mysqli($server_name,$username,$password,$database_name);
if($pass==TRUE)
{
    echo "link Stablised Successfully";

}else
{
    echo "link Not Stablised";
}
// $sql= "CREATE TABLE student(
//       id int(255) PRIMARY KEY AUTO_INCREMENT,
//       name varchar(255),
//       phone_number varchar(255),
//       photo varchar(255)
// )";

// $result= $pass->query($sql);
// if($result==true)
// {
//     echo "table created ";
// }else
// {
//     echo "not created";
// }


?>
