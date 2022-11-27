<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="post">
        Select image : 
      <input type="file"><br><br>
      Select Category :
      <select name="cate">
          <option >Select one</option>
        <option value="bday">Birthday</option>
        <option value="mar">marrige</option>
        <option value="fun">Function
        </option>
      </select><br><br>
      Enter service name :
      <input type="text" name="p_name"><br><br>
      Enter short detail about service:
      <input type="text" name="s-des"><br><br>
      Enter full details:
      <textarea name="f_des"  cols="30" rows="10" style="white-space: pre-wrap; "></textarea><br><br>
      <input type="reset"><br><br>
      <input type="submit">
      

    </form>
    
</body>
</html>