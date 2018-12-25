<?php
$koneksi=mysqli_connect("localhost","root","","tubes_pw");
//Define function to insert security image
function insertSecurityImage($inputname) {
$refid = md5(mktime()*rand());
$insertstr = "<img src=\"securityimage.php?".$refid."\"alt=\"SecurityImage\">\n
<input type=\"hidden\" name=\"".$inputname."\"value=\"".$refid."\">";
echo($insertstr);
}
//Define function to check security image confirmation
function checkSecurityImage($referenceid, $enteredvalue) {
$referenceid = mysql_escape_string($referenceid);
$enteredvalue = mysql_escape_string($enteredvalue);
$tempQuery = mysqli_query($koneksi, "SELECT ID FROM security_images WHERE
referenceid='".$referenceid."' AND
hiddentext='".$enteredvalue."'");
if (mysql_num_rows($tempQuery)!=0) {
return true;
} else {
return false;
}
}
?>

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

        <?php
        if (isset($HTTP_POST_VARS["name"]) &&
        isset($HTTP_POST_VARS["security_try"]))
        {
        //Connect to database
        mysql_connect("localhost", "root", "");
        mysql_select_db("tubes_pw");
        //Set variables, and call checkSecurityImage
        $security_refid = $HTTP_POST_VARS["security_refid"];
        $security_try = $HTTP_POST_VARS["security_try"];
        $checkSecurity = checkSecurityImage($security_refid,
        $security_try);
        //Depending on result, tell user entered value was correct orincorrect
        if ($checkSecurity) {
        $validnot = "correct";
        } else {
        $validnot = "incorrect";
        }
        //Write output
        echo("<b>You entered this as the security text:</b><br>\n
        ".$security_try."<br>\n
        This is ".$validnot.".<br>\n
        -------------------------------<br><br>\n
        ");
        }
        ?>
        <?php insertSecurityImage("security_refid") ?><br>
        <p>Enter what you see:
        <input name="security_try" type="text" id="security_try"
        size="20"
        maxlength="10">
        <p>(can't see? try reloading page)
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
              
        if(mysqli_num_rows($result) > 0)  
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
          echo "<script>alert('Username or password is incorrect!')</script>";  
        }  
    }  
?> 