<?php
   include 'header.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="go.css">
    
</head>
<body>

    <form action="go.php" method="post">
   <div class="mon">
       
       <div class="fom"> Name: <input type="text" class="non" name="username" id="name"></div>
        <div class="fom"> Mobile: <input type="number" class="non" name="number"></div>
            <div class="fom"> <label for="add"> Address: </label><textarea class="non" class="text" name="add" id="add" cols="30" rows="10"></textarea></div>
            <div class="fom"> Payment Method: <input type="radio" class="mon" name="1" value="1">Cash On Delivery <br>
            <input type="radio" class="mon" name="1" value="2">Pay Now</div> <input type="submit" class="but"> </div>
          
           </form>
            
</body>
</html>
<?php 
include 'footer.php';
?>