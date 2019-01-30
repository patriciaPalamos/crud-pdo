<?php

    include_once '../config/Database.php';
    include_once '../models/Student.php';

    $database = new Database();
    $db = $database->connect();

    $student = new Student($db);

    $student->id = $_POST['id'];
    $student->name = $_POST['name'];
    $student->age = $_POST['age'];
    $student->phone = $_POST['phone'];
    
    $student->update();

    header ("Location: ../views/index.php");
?>