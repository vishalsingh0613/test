<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Please Fill The form</h1>
    <form action="data.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <br>
        <input type="text" id="name" name="name" placeholder="Please Enter Your Name">
        <br>
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="email" id="email" name="email" placeholder="Please Enter Your Email">  
        <br>
        <br>
        <label for="age">Enter Your Age:</label>
        <br>
        <input type="number" id="age" name="age" placeholder="Enter Your Age">
        <br>
        <br>
        <input type="submit" value="submit">


    </form>
    
</body>
</html>