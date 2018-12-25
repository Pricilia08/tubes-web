<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <h2 align="center">Register Now!</h2>
    <br>
    <div class="container">
    <form role="form" method="post" action="register.php">  
      <div class="form-group">  
        <input class="form-control" placeholder="Name" name="nama_vol" type="text" autofocus> 
      </div> 
      <div class="form-group">  
        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
      </div>  
      <div class="form-group">  
        <input class="form-control" placeholder="Password" name="password" type="password" autofocus>  
      </div>
      <div class="form-group row" align="center">
      <div class="col-sm-12">
          <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
        </div>
      </div>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

    <?php  
      
    include("include/config.php"); 
    if(isset($_POST['register']))  
    {  
        $nama_vol = $_POST['nama_vol'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($nama_vol == '') {
          echo "<script>alert('masukan nama_vol')</script>";
          exit();
        }
        if ($email == '') {
          echo "<script>alert('masukan email')</script>";
          exit();
        }
        if ($password == '') {
          echo "<script>alert('masukan password')</script>";
          exit();
        }
        
        $check_email_query="select * from pengguna WHERE email='$email'";  
        $run_query=mysqli_query($conn,$check_email_query);  
              
        if(mysqli_num_rows($run_query)>0){  
            echo "<script>alert('Email $email ini sudah dipakai, Please try another one!')</script>";  
            exit();  
        }
              
       $sql = "INSERT INTO pengguna (nama_vol,email,password) VALUES ('$nama_vol','$email','$password')";  
        if(mysqli_query($conn,$sql)){  
            echo"<script>window.open('login.php','_self')</script>";  
        }  
    }  
?>