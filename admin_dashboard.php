<?php
include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                        <input type="submit" name="search_student" value="Search Student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="edit_student" value="Edit Student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="add_new_student" value="Add Student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="delete_student" value="Delete Student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="show_teachers" value="Show Teachers">
                    </td>
                </tr>
              </table>  
        </form>
    </div>
    <div id="right_side"><br><br>
        <div id="demo">
            <?php
                if(isset($_POST['search_student'])){
                    ?>
                    <center>
                        <form action="" method="post">
                            Enter Roll No: <input type="text" name="roll_no">
                            <input type="submit" name="search_by_roll_no_for_search" value="Search">
                        </form>
                    </center>
                    <?php
                }
                if(isset($_POST['search_by_roll_no_for_search'])){
                    $query = "SELECT * FROM STUDENT WHERE ROLL_NO='$_POST[roll_no]'";
                    $data = mysqli_query($conn,$query);
                    while($row= mysqli_fetch_assoc($data)){
                        ?>
                        <table>
                            <tr>
                                <td>
                                    <b>Roll No: &nbsp;&nbsp; </b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['ROLL_NO']; ?>"disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Name: &nbsp;&nbsp; </b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['NAME']; ?>"disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Father's Name: &nbsp;&nbsp; </b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['FATHER_NAME']; ?>"disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Mobile No: &nbsp;&nbsp; </b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['MOBILE_NO']; ?>"disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Email: &nbsp;&nbsp; </b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['email']; ?>"disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Password: &nbsp;&nbsp; </b>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['password']; ?>"disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Remark: &nbsp;&nbsp; </b>
                                </td>
                                <td>
                                    <textarea rows="3" cols="40"  disabled><?php echo $row['REMARK']; ?>
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['edit_student'])){
                    ?>
                    <center>
                        <form action="" method="post">
                            Enter Roll No: <input type="text" name="roll_no">
                            <input type="submit" name="search_by_roll_no_for_edit" value="Search">
                        </form>
                    </center>
                    <?php
                }
                if(isset($_POST['search_by_roll_no_for_edit'])){
                    $query = "SELECT * FROM STUDENT WHERE ROLL_NO='$_POST[roll_no]'";
                    $data = mysqli_query($conn,$query);
                    while($row= mysqli_fetch_assoc($data)){
                        ?>
                        <form action="admin_edit_student.php" method="post">
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
                                        <input type="submit" name="edit" value="Edit">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['add_new_student'])){
                    ?>
                    <center><h4>Fill the given details:</h4></center><br>
                    <form action="add_student.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    Roll No:
                                </td>
                                <td>
                                    <input type="text" name="roll_no" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name:
                                </td>
                                <td>
                                    <input type="text" name="name" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Father Name:
                                </td>
                                <td>
                                    <input type="text" name="father" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Class:
                                </td>
                                <td>
                                    <input type="text" name="class" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mobile No:
                                </td>
                                <td>
                                    <input type="text" name="mobile" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <input type="text" name="email" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password
                                </td>
                                <td>
                                    <input type="text" name="password" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Remark:
                                </td>
                                <td>
                                    <textarea cols="40" rows="3" name="remark"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                   <input type="submit" name="add" value="Add Student">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                }
                ?>
                <?php
                if(isset($_POST['delete_student'])){
                    ?>
                    <center>
                        <h5>Enter Roll No to Delete Student</h5><br><br>
                        <form action="delete_student.php" method="post">
                            Roll No: <input type="text" name="roll_no">
                            <input type="submit" name="search_by_roll_no_for_delete" value="Delete Student">
                        </form>
                    </center>
                    <?php
                }
                ?>
                <?php
                    if(isset($_POST['show_teachers'])){
                        ?>
                        <center>
                            <h5>Teachers Details</h5><br>
                            <table>
                                <tr>
                                    <td id="td"><b>ID</b></td>
                                    <td id="td"><b>Name</b></td>
                                    <td id="td"><b>Mobile</b></td>
                                    <td id="td"><b>Courses</b></td>
                                    <td id="td"><b>View Detail</b></td>
                                </tr>
                            </table>
                        </center>
                        <?php
                        include("connection.php");
                        $query = "SELECT * from `teachers` ";
                        $data = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($data)){
                            ?>
                            <center>
                                <table style="border-collapse: collapse;border:1px solid black;">
                                    <tr>
                                        <td id="td"><?php echo $row['ID']?></td>
                                        <td id="td"><?php echo $row['NAME']?></td>
                                        <td id="td"><?php echo $row['MOBILE_NO']?></td>
                                        <td id="td"><?php echo $row['COURSES']?></td>
                                        <td id="td"> <a href="#">View Detail</a></td>
                                    </tr>
                                </table>
                            </center>
                            <?php
                        }
                    }
                ?>
        </div>
    </div>
</body>
</html>