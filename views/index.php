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
        $result = $student->read();
    ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($result as $row) {?>
            <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['phone']?></td>
                <td>
                <a href="../views/edit.php?id=<?php echo $row['id']?>">Edit</a>
                <a href="../controller/delete.php?id=<?php echo $row['id']?>">Delete</a>

                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <a href="../views/create.php">Add New Record</a>
</body>
</html>