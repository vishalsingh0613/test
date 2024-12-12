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

// $sql = "CREATE DATABASE dbtesting";
// $re=$con->query($sql);
// if($re==true)
// {
//     echo "data base created successfully";

// }
// else{
//     echo "not created";

// }
// $sql = "CREATE TABLE student(
// id int(255),
// name varchar(255)
// )";
// $res=$con->query($sql);
// if($res==true)
// {
//     echo "table created successfully";

// }else
// {
//     echo "not created ";
// }

// $sql ="INSERT INTO student (`id`,`name`) VALUES (2,'rohan')";
// $resu=$con->query($sql);
// if($resu==true)
// {
//     echo "table created successfully";

// }else
// {
//     echo "not created ";
// }

// $sql="DELETE FROM student
// WHERE id=2";
// $resut=$con->query($sql);
// if($resut==true)
// {
//     echo "Deleted Successfuly";

// }else
// {
//     echo "not deleted ";
// }
// $sql ="UPDATE student
//      SET name='riya'
//      WHERE id=1";
// $result=$con->query($sql);
// if($result==true)
// {
//     echo "Updated  Successfuly";

// }else
// {
//     echo "not updated ";
// }


// $sql="DROP TABLE student";
// $result=$con->query($sql);
// if($result==true)
// {
//     echo "deleted Successfuly  Successfuly";

// }else
// {
//     echo "not Not Deledted ";
// }
// $sql = "CREATE TABLE student(
// id int(255) PRIMARY KEY AUTO_INCREMENT,
// name varchar(255),
// age int(255),
// rank int(255),
// img varchar(255)
// )";
// $result = $con->query($sql);
// if($result==TRUE)
// {
// echo "table Created Successfully";
// }
// else{
//     echo "not Created";
// }

// $sql="INSERT INTO student(`name`,`age`,`rank`,`img`) values('vishal',34,05,'img/2.jpg'),('yogesh',20,06,'img/2.jpg'),('mohan',24,01,'img/2.jpg'),('sohan',30,2,'img/2.jpg')";
// $result=$con->query($sql);
// if($result==TRUE)
// {
//     echo "inserted value Successfully";

// }
// else{
//     echo "not inserted";
// }


// $con->close();

// $sql="SELECT *From student";
// $res=$con->query($sql);
// print_r($res);
// if($res->num_rows>0)
// {
   
//     while( $row=$res->fetch_assoc())
//     {    
// echo "<br>";
//         echo "id:".$row["id"];
// echo "<br>";
// echo "name:".$row["name"];

//     }
//     //echo $row;
//     //print_r($row);
    
// }
echo "<br>";

//
// try {
//     $a = 4;
//     $b = 0;

//     // Check for division by zero before performing the operation
//     if ($b == 0) {
//         throw new Exception("Cannot divide by zero");
//     }

//     // If no exception was thrown, perform the division
//     $div = $a / $b;

//     echo "divided: " . $div;  // This line will not be executed if exception is thrown
// } catch (Exception $e) {
//     // Catch and handle the exception
//     echo $e->getMessage();  // This will echo the exception message
// }


?>
