<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Please Fill The Form </h2>
    <form action="submit.php" method="post" enctype="multipart/form-data">


    <label for="name">Name: </label>
<br>
<input type="text" id="name" placeholder="enter Your full Name" name="name">
<br>
<br>
<label for="email"> Email:</label>
<br>
<input type="email" id="email" name="email" placeholder="enter your emailid">
<br>
<br>
<label for="phone">Phone Number: </label>
<br>
<input type="number" id="phone" name="phone" placeholder="enter Your Phone Number">
<br>
<br>
<label for="age">enter your Age</label>
<br>
<input type="number" id="age" name="age" plceholder="enter your age">
<br>
<br>
<label for="file">Uploade a Photo:</label>
<br>
<input type="file" id="file" name="file" accept=".jpg">
<br>
<br>
<input type="submit" value="submit this form">




</form>


    
</body>
</html>