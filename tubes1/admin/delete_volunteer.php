<?php  
    include("../include/config.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from volunteer WHERE id_vol='$delete_id'"; 
    $result=mysqli_query($conn,$delete_query);  
    if($result)  
    {   
        echo "<script>window.open('view_volunteer.php?deleted=volunteer has been deleted','_self')</script>";  
    }  
      
    ?>  
