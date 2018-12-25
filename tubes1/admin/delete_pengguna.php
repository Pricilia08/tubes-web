    <?php  
    include("../include/config.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from pengguna WHERE id='$delete_id'"; 
    $result=mysqli_query($conn,$delete_query);  
    if($result)  
    {   
        echo "<script>window.open('view_volunteer.php?deleted=user has been deleted','_self')</script>";  
    }  
      
    ?>  
