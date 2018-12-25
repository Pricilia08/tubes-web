<?php
    include '../include/config.php';
    if (isset($_POST['simpan'])) {
        $user_id;
        $status = $_POST['status'];
        $sql = "UPDATE tbluser SET status = '$status' where id_user = '$user_id'";
        $hasil = mysqli_query($conn,$sql);
        if($hasil){  
            echo"<script>window.open('view_users.php','_self')</script>";  
        }else{
          echo "error".$sql;
        }
    }
    
?>