<?php
include 'connect.php';
$name=$_REQUEST["name"];
echo $name;
$email=$_REQUEST["email"];
echo "<br>";
echo $email;
$myfile = $_FILES['myfile'];
echo "<pre>";
print_r($myfile);
echo "<pre>";
$rank=$_REQUEST["rank"];
$age =$_REQUEST["age"];

$file_name=$myfile['name'];
echo $file_name;
$temp_name=$myfile['tmp_name'];
//echo $temp_name;
//echo $file_name;



$res =  move_uploaded_file($temp_name, "imgs/".$file_name);
if($res==TRUE)
{
    echo "file uploaded sucessfuly";
}
else{
    echo "failed";
}


// $server_name ="localhost";
// $username ="root";
// $password="";
// $database_name="php_practice";
// $con=new mysqli($server_name,$username,$password,$database_name);
// if($con==TRUE)
// {
//     echo "conected successfuly";
// }
// else{
//     echo "not conected";
// }
$sql ="INSERT INTO student (`name`,`age`,`rank`,`img`) VALUES ('$name','$age','$rank','$file_name')";
$resu=$con->query($sql);
if($resu==true)
{
    echo "table created successfully";

}else
{
    echo "not created ";
}

?>