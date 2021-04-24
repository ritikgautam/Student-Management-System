<?php
include("connection.php");
$query = "UPDATE STUDENT SET NAME='$_POST[name]',FATHER_NAME='$_POST[father_name]',CLASS='$_POST[class]',MOBILE_NO='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',REMARK='$_POST[remark]' WHERE ROLL_NO=$_POST[roll_no]";
$data = mysqli_query($conn,$query);
?>
<script type="text/javascript">
    alert("Details Edited Succesfully");
    window.location.href="student_dashboard.php";
</script>
<!--   -->