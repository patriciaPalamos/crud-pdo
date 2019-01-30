<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="../controller/create.php" method="POST">
        <label for="name">NAME</label>
        <input type="text" name="name" placeholder="Enter your name"> </br> </br>

        <label for="age">AGE</label>
        <input type="text" name="age" placeholder="Enter your age"> </br> </br>

        <label for="phone">PHONE</label>
        <input type="text" name="phone" placeholder="Enter your phone"> </br> </br>
        
        <input type="submit" value="Submit">
    </form>
    <a href="../views/index.php">Back to Home</a>
</body>
</html>