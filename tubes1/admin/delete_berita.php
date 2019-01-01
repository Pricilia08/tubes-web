    <?php  
    include("../include/config.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from berita WHERE id_berita='$delete_id'"; 
    $result=mysqli_query($conn,$delete_query);  
    if($result)  
    {   
        echo "<script>window.open('index1.php?isi=view_berita','_self')</script>";
    }  
      
    ?>  
