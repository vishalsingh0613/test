<?php
include 'conection.php';

$name=$_REQUEST["name"];
echo $name;
echo "<br>";
$email=$_REQUEST["email"];
echo $email;
echo "<br>";
$phone=$_REQUEST["phone"];
echo $phone;
echo "<br>";
$age=$_REQUEST["age"];
echo $age;
echo "<br>";
$file= $_FILES["file"];
echo "<pre>";
print_r($file);
$file_name=$file["name"];
echo $file_name;
$file_tmp_name=$file["tmp_name"];
echo $file_tmp_name;
$res=move_uploaded_file($file_tmp_name,"img/".$file_name);

if($res==TRUE)
{
    echo "uploaded";

}else
{
    echo "not uploaded";
}
$sql="INSERT INTO student(`name`,`email_id`,`phone_number`,`age`,`img`)VALUES('$name','$email','$phone','$age','$file_name')";
$result = $link->query($sql);
if($result==TRUE)
{
    echo "data inserted";

}else
{
    echo "data not inserted";
}
$sql="SELECT id,name,email_id,phone_number,age,img FROM student";
$result= $link->query($sql) ;
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
        echo "<br> id:".$row["id"]."<br>"."name:".$row["name"]."<br>"."email:".$row["email_id"]."<br>"."phone:".$row["phone_number"]."<br>"."age".$row["age"]
."file".$row["img"]."<br>";
        }
    }
        else{
            echo"0 output";
        }


?>