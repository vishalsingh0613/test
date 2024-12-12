<?php
$server_name ="localhost";
$username ="root";
$password="";
$database_name="php_practice";
$con=new mysqli($server_name,$username,$password,$database_name);
if($con==TRUE)
{
    echo "conected successfuly";
}
else{
    echo "not conected";
}
?>