<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ajax</h2>
    <img id="data" src="" alt="">
    <div >

    </div>
<script>
var xhttps = new XMLHttpRequest();
xhttps.onreadystatechange =function()
{
 if(this.readyState==4 && this.status==200)
{
    var x=this.responseText;
   //document.write(typeof(x));
    var y=JSON.parse(x);
    //document.write(typeof(y.message));
    
    
    
    document.getElementById("data").src=y.message;
    //alert(y.message);
}
}
xhttps.open("GET","https://dog.ceo/api/breeds/image/random");
xhttps.send();

// var obj={
//     "name":"ram",
// "age":20
// }
// var strs=JSON.stringify(obj);
// window.location="submit.php?val="+strs;

</script>






</body>
</html>