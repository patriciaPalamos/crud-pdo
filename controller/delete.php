<?php

    include_once '../config/Database.php';
    include_once '../models/Student.php';

    $database = new Database();
    $db = $database->connect();

    $student = new Student($db);

    $student->id = $_GET['id'];
    
    $student->delete();

    header ("Location: ../views/index.php");
?>