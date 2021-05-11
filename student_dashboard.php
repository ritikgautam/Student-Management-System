<?php
include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\css\bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\js\juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-beta2-dist\bootstrap-5.0.0-beta2-dist\js\bootstrap.min.js"></script>
    <style type="text/css">
        #header{
        height: 10%;
        width: 100%;
        top: 2%;
        background-color:black;
        position: fixed;
        color: white;
        }
        #left_side{
            height: 75%;
            width: 15%;
            top: 10%;
            position: fixed;
        }
        #right_side{
            height: 75%;
            width: 80%;
            top: 21%;
            position: fixed;
            background-color: whitesmoke;
            position: fixed;
            left: 17%;
            color: red;
            border: solid 1px black;
        }
        #top_span{
            top:15%;
            width:80%;
            left: 17%;
            position: fixed;
        }
        #td{
            border: solid 1px black;
            padding-Left: 2px;
            text-align: left;
            width: 200px;
            color: black;
        }
    </style>
</head>
<body>
    <div id="header">
        
        <br><center><strong> Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Email: <?php echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php">Logout</a>
            </center>
    </div>
    <span id="top_span"> <marquee behavior="" direction="">Note:- This portal is open till 10 June......Please edit your information if wrong.</marquee> </span>
    <div id="left_side"><br><br><br>
        <form action="" method="post">
              <table>
                <tr>
                    <td>
                        <input type="submit" name="show_detail" value="Show Details">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="edit_details" value="Edit Details">
                    </td>
                </tr>
              </table>  
        </form>
    </div>
    <div id="right_side"><br><br>
        <div id="demo">
            <?php
                if(isset($_POST['show_detail'])){
                    $query = "SELECT * FROM student WHERE email='$_SESSION[email]'";
                    $data = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_assoc($data)){
                        ?>
                        <table>
                            <tr>
                                <td>
                                    <b>Roll No:</b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['ROLL_NO'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Name:</b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['NAME'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Father's Name :</b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['FATHER_NAME'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Class:</b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['CLASS'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Mobile No:</b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['MOBILE_NO'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Email:</b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['email'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Password:</b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['password'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Remark:</b>
                                </td>
                                <td>
                                    <textarea cols="40" rows="3" disabled><?php echo $row['REMARK'];?></textarea>
                                </td>
                            </tr>
                        </table>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['edit_details'])){
                    $query = "SELECT * FROM student WHERE email='$_SESSION[email]'";
                    $data = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_assoc($data)){
                        ?>
                         <form action="edit_student.php" method="post">
                            <table>
                                <tr>
                                    <td>
                                        <b>Roll Number: &nbsp;&nbsp; </b>
                                    </td>
                                    <td>
                                        <input type="text" name="roll_no" value="<?php echo $row['ROLL_NO']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Name: &nbsp;&nbsp; </b>
                                    </td>
                                    <td>
                                        <input type="text" name="name" value="<?php echo $row['NAME']; ?>">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Father's Name: &nbsp;&nbsp; </b>
                                    </td>
                                    <td>
                                        <input type="text" name="father_name" value="<?php echo $row['FATHER_NAME']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Class: &nbsp;&nbsp; </b>
                                    </td>
                                    <td>
                                        <input type="text" name="class" value="<?php echo $row['CLASS']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Mobile No: &nbsp;&nbsp; </b>
                                    </td>
                                    <td>
                                        <input type="text" name="mobile" value="<?php echo $row['MOBILE_NO']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Email: &nbsp;&nbsp; </b>
                                    </td>
                                    <td>
                                        <input type="text" name="email" value="<?php echo $row['email']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Password: &nbsp;&nbsp; </b>
                                    </td>
                                    <td>
                                        <input type="text" name="password" value="<?php echo $row['password']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Remark: &nbsp;&nbsp; </b>
                                    </td>
                                    <td>
                                        <textarea cols="40" rows="3" name="remark" >
                                            <?php echo $row['REMARK']; ?>
                                        </textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" name="edit" value="Save">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    }
                }
                ?>
        </div>
    </div>
</body>
</html>