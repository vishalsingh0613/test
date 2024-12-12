<?php
include 'connectionforall.php';

$name=$_REQUEST['name'];

echo "<br>";
echo $name;

$email =$_REQUEST['email'];
echo "<br>";
echo $email;

$phone=$_REQUEST['phone'];
echo "<br>";
echo $phone;
$file=$_FILES['file'];
echo "<pre>";
print_r($file);
$file_name=$file['name'];
$file_temp=$file['tmp_name'];

echo $file_name;
echo "<br>";
echo $file_temp;
$result = move_uploaded_file($file_temp,"img/".$file_name);
if($result==TRUE)
{
    echo "photo moved";

}else
{
    echo "not moved";
}
 $sql= "INSERT INTO student(`name`,`phone_number`,`photo`) VALUES('$name','$phone','$file_name')";
 $res=$pass->query($sql);
 if($res==TRUE) 
 {
    echo "data inserted Successfully";
 }else
 {
    echo "not inserted";
 }






?>
