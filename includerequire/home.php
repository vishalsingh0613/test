<?php
session_start();


if(!isset($_SESSION["favcolor"]))
{


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>home file</h1>

<?php
require 'header.php';
?>
<h2>second message</h2>
 <?php

}
?>
</body>
</html>