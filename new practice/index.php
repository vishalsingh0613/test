<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Please Provide Personal Details</h1>
    <form action="getdata.php" method="post" enctype="multipart/form-data">
     <br>
     <br>
     <label for="name">Name:</label>
     <br>
     <input type="text" id="name" name="name" placeholder="Enter Your Full Name">
     <br>
     <br>
     <label for="email">Email:</label>
     <br>
     <input type="email" id="email" name="email" placeholder="Enter Your Email Id">
     <br>
     <br>
     <label for="phone">Phone Number:</label>
     <br>
     <input type="number" id="phone" name="phone" placeholder="Enter Your Phone Number">
     <br>
     <br>
     <label for="file"> Upload Your  Photo:</label>
     <br>
     <br>
     <input type="file" id="file" name="file">
     <br>
     <br>

     <input type="submit" value="submit">
<?php
// echo "<br>";
// $str="hello";
// echo md5($str);
// echo "<br>";
// $mess="hello";
// $enc =base64_encode($mess);
// echo $enc;
// echo "<br>";
// $des= base64_decode($enc);
// echo $des;
?>



    </form>
</body>
</html>