

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="reg">
        <form action="" method="post">
        <label for="">name</label>
        <input type="text" placeholder="Alex" name="name">
        <label for="">surname</label>
        <input type="text" placeholder="John" name="surname">
        <label for="">Data</label>
        <input type="date" name="yearOfBirthday">
        <input type="submit" value="send" name="reg">
        </form>
    </div>

    <?php $mysqli = new mysqli("localhost", "root", "", "test") or die("Bog`lana olmadi!");
    
    if($_POST){
     $result = $mysqli->query("SELECT * FROM user");
    
     while($row = $result->fetch_assoc()){

     }

    $q= "INSERT INTO `user`(name,surname,`yearOfBirthday`) VALUES('{$_POST["name"]}','{$_POST["surname"]}','{$_POST["yearOfBirthday"]}')";
    $send = $mysqli->query($q);
    if($send){
        header("Location: http://test.php");
       exit();
    }
    }

    //  $result = $mysqli->query("SELECT * FROM user");
    //  while ($row = $result->fetch_assoc()){ 
    //  echo $row['surname'] . " " . $row['name'] . "<hr>";
    //  }
     ?>

</body>
</html>