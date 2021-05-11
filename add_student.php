<?php
    include("connection.php");
    $query = "INSERT INTO `student` ( `ROLL_NO`, `NAME`, `FATHER_NAME`, `CLASS`, `MOBILE_NO`, `email`, `password`, `REMARK`) VALUES ('$_POST[roll_no]', '$_POST[name]', '$_POST[father]', '$_POST[class]', '$_POST[mobile]', '$_POST[email]', '$_POST[password]', '$_POST[remark]')";
    $data = mysqli_query($conn,$query);
    ?>
<script type="text/javascript">
        alert("Details Added Succesfully");
        window.location.href="admin_dashboard.php";
 </script>
