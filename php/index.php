<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Qurey Form</h2>
    <form  method="POST" action="submit.php" enctype="multipart/form-data">
    <label for="name">Name:</label><br>
    <input type="text" id="name" placeholder="enter your Name" name="name"><br>
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
</body>
</html>