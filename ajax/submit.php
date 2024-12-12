<?php
$val = $_GET["val"];
print_r($val);
var_dump($val);
$p=json_decode($val);
echo $p->name;
var_dump($p);

?>