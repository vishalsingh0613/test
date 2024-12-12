<?php
include 'link.php';

$name=$_REQUEST['name'];
echo $name;
echo "<br>";
$email=$_REQUEST['email'];
echo $email;
echo "<br>";
$age =$_REQUEST['age'];
echo $age;

$sql="INSERT INTO student(`email`,`age`)VALUES('$email','$age')";
$result= $pass->query($sql);
if($result==TRUE)
{
    echo "Value Inserted Successfully";
}else
{
    echo "not Inserted";
}




?>