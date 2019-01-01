
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <h2 align="center">Login Now!</h2>
    <br>
    <div class="container">
    <form role="form" method="post" action="login.php">  
      <div class="form-group">  
        <input class="form-control" placeholder="Name" name="nama_vol" type="text" autofocus> 
      </div> 
      <div class="form-group">  
        <input class="form-control" placeholder="Password" name="password" type="password" autofocus>  
      </div>
      <div class="form-group">
      <label for="captcha">Captcha</label>
        <input name="kodeval" type="text" id="kodeval" size="6" maxlength="6" />
        <img src="kodeacak.php" width="75" height="25" alt="Kode Acak" />  
      </div>
      <div class="form-group row">
          <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login" >
      </div>
          <p align="center">Belum punya akun? <a href="register.php"> Register Now! </a></p>
      </div>
    </form></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php  
      
    include("include/config.php");  
      
    if(isset($_POST['login']))  
    {  

        $nama_vol = $_POST['nama_vol'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM pengguna WHERE nama_vol='$nama_vol' AND password='$password'";
        $result = mysqli_query($conn, $sql); 
              
        if((mysqli_num_rows($result) > 0) && ($_SESSION['kodecap']=$_POST['kodeval']))
        {  
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row["id"];
                $user = $row["nama_vol"];
                session_start();
                $_SESSION['nama_vol'] = $nama_vol;
                $_SESSION['user'] = $user;
            }
            header("Location: user.php");   
        }  
        else  
        {  
          echo "<script>alert('Username/password/captcha is incorrect!')</script>";  
        }  
    }  
?> 