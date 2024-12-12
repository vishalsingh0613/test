<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
    /* .show
    {
color:red;
background:black;
display:inline-block;
    } */
</style>
</head>
<body>
<div class="root">
    <!-- <div class="hello">
        <p>first</p>
        <p>second</p>
    </div>
    <h2>last line</h2> -->
     <div class="hello">
        <p class="one">first</p>
        <p class="two">second</p>
        <p class="two">second</p>
        <p class="two">second</p>
        <h2>third</h2>
        <div>fourth</div>
    </div>
    <h2 class="two">last line</h2>
</div>
<script>
// $(document).ready(function(){
// $("p").parents().css({"color":"white","background":"black"});
// $(document).ready(function(){
// $("p").parent().parent().parent().children().css({"color":"white","background":"black"});
// });

// $(document).ready(function(){
// $("p").parent().parent().parent().children().css({"color":"white","background":"black"});
// });

// $(document).ready(function(){
// $(".root").find(".one ,.two").css({"color":"white","background":"black"});
// });
// $(document).ready(function(){
// $(".one").siblings().css({"color":"white","background":"black"});
// });
$(document).ready(function(){
$("p").eq(0).css({"color":"white","background":"black"});
});

// $(document).ready(function(){
// $("p").filter(".two").css({"color":"white","background":"black"});
// });

</script>

    <!-- <div class="color">
        working now
    </div>
    <button id="show">show</button>
    <button id="remove">Remove</button> -->
<!--<script>

// $(document).ready(function(){
//     $("#show").click(function(){
//         $(".color").css({"background-color":"black","color":"white"});
//     });
//     // $("#remove").click(function(){
//     //     $(".color").removeClass("show");
//     // });
// });
 </script>-->
    <!-- <div id="dum">here</div>
    <button id="btn">append</button>
    <button id="btn2">prepend</button>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(){

              $("#dum").after("append");
            });        
               $("#btn2").click(function(){
                $("#dum").before("prepend");
               });
        });
    </script> -->
</body>
</html>