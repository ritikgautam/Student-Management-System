<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\css\bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\js\juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\js\bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br>
    <h1>Student Management System</h1><br>
    <br>
    <form action="" method="post">
        <input type="submit" name="admin_login" value="Admin Login"/>
        <input type="submit" name="student_login" value="Student Login"/>
    </form>
<?php


if(isset($_POST['admin_login'])){
    header("Location:admin_login.php");
}
if(isset($_POST['student_login'])){
    header("Location:student_login.php");
}

?>

</center>
</body>
</html>