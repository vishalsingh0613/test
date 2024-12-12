<?php
include 'connect.php';
$sql="SELECT *From student WHERE id=2";
$res=$con->query($sql);
print_r($res);

        

   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<h2>edit Form</h2>
<?php
if($res->num_rows>0)
{
   
    while( $row=$res->fetch_assoc())
    {
        //if($row["id"]==2)
        //{
            echo "<br>";
            echo "id:".$row["id"];
            echo "<br>";
            echo "name:".$row["name"];
       // }
        ?>
    <form  method="POST" action="submit.php" enctype="multipart/form-data">
    <label for="name">Name:</label><br>
    <input type="text" id="name" placeholder="enter your Name" name="name" value="<?php echo $row["name"];  ?>"><br>
    <label for=" email">email:</label><br>
    <input type="email" id="email"placeholder="enter your email id" name="email">
    
    <br>
    <input type="number" id="age" placeholder="enter your age" name="age">
    <br>
    <input type="number" id="rank" placeholder="enter your rank" name="rank">
    <br>
<input type="file" name="myfile" accept=".jpg" >
<br>


<input type="submit" value="submit this form">

</form>
    <?php
     }
    
    }
?>    
</body>
</html>