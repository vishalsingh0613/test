<?php
include 'connection.php';

$name=$_REQUEST["name"];
echo $name; 
echo "<br>";
$email=$_REQUEST["email"];
echo $email;
echo "<br>";
$number =$_REQUEST["phone"];
echo $number;
echo "<br>";
$age =$_REQUEST["age"];
echo $age;
$file=$_FILES["file"];
echo "<pre>";
print_r($file);
$file_name=$file['name'];
$temp_name=$file['tmp_name'];
$res=move_uploaded_file($temp_name,"img/".$file_name);
if($res==true)
{
    echo "uploaded successfully";

}
else
{
    echo "not uploaded";
}
$sql="INSERT INTO student(`name`,`email`,`Contact`,`age`,`img`) VALUES('$name','$email','$number','$age','$file_name')";
$find=$link->query($sql);
if($find==true)
{
    echo "data inserted successfully";
}
else{
    echo "not inserted ";
}



// $sql ="INSERT INTO student (`name`,`age`,`rank`,`img`) VALUES ('$name','$age','$rank','$file_name')";
// $resu=$con->query($sql);
// if($resu==true)
// {
//     echo "table created successfully";

// }else
// {
//     echo "not created ";
// }
?>