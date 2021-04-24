<script type="text/javascript">
    if(confirm("Are you sure you want to Delete")){
        document.write(<?php include("connection.php");
            $query = "DELETE FROM `student` WHERE ROLL_NO = '$_POST[roll_no]'";
            $data = mysqli_query($conn,$query);?>);
            alert("Details Deleted Succesfully");
            }
    window.location.href="admin_dashboard.php";
</script>