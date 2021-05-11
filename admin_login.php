<?php
    session_start();
    include("connection.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\css\bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\js\juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\js\bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br>
    <h1>Admin Login Page</h1><br>
    <br>
    <form action="" method="post">
        Email:<input type="text" name="email" required/><br><br>
        Password:<input type="password" name="password" required/><br><br>
        <input type="submit" name="submit"/>
    </form>
    <?php
        $email="";
        $name="";
        if(isset($_POST['submit'])){
            $user = $_POST['email'];
            $pwd = $_POST['password'];
            $query = "SELECT * FROM login WHERE email='$user'";
            $data = mysqli_query($conn,$query);
            while($row= mysqli_fetch_assoc($data)){
                if($row['email']==$user){
                    if($row['password']==$pwd){
                        $_SESSION['email']=$row['email'];
                        $_SESSION['name']=$row['name'];
                        header("Location: admin_dashboard.php");
                    }
                    else{
                        echo "Wrong Password";
                    }
                }
                else{
                    echo "Wrong email-id";
                }
            }
        }
    ?>

</center>
</body>
</html>