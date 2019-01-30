<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include_once '../config/Database.php';
        include_once '../models/Student.php';

        $database = new Database();
        $db = $database->connect();

        $student = new Student($db);

        $student->id = $_GET['id'];
        $result = $student->edit();
    ?>

    <form action="../controller/update.php" method="POST">
        <?php foreach ($result as $row) {?>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">

        <label for="name">NAME</label>
        <input type="text" name="name" value="<?php echo $row['name']?>" placeholder="Enter your name"> </br> </br>

        <label for="age">AGE</label>
        <input type="text" name="age" value="<?php echo $row['age']?>" placeholder="Enter your age"> </br> </br>

        <label for="phone">PHONE</label>
        <input type="text" name="phone" value="<?php echo $row['phone']?>" placeholder="Enter your phone"> </br> </br>
        
        <input type="submit" value="Submit">
        <?php } ?>
    </form>
</body>
</html>