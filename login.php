
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<?php 
    session_start();
    /*$username=$_POST['uname'];
    $password=$_POST['password'];*/
    $_SESSION['username']=$_POST['uname'];
    $_SESSION['password']=$_POST['password'];

    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "customer";

     $connection = new mysqli($host, $user, $pass, $db);
    if($connection->connect_error) {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $connection->connect_error;
    }
    else {
         $sql = "SELECT * FROM user";
       $result = $connection->query($sql);
    if ($result->num_rows > 0) {
 
     while($row = $result->fetch_assoc()) {
    //echo "User name: " . $row["uname"]. " - Password: " . $row["pass"].  "<br>";
     
    if($row['uname']==$_SESSION['username'] && $row['password']== $_SESSION['password'])
    {
       $_SESSION['firstname']=$row['fname'];
        $_SESSION['lastname']=$row['lname'];
         $_SESSION['email']=$row['email'];
           $_SESSION['gender']=$row['gender'];
            $_SESSION['mobile']=$row['mobile'];
            $_SESSION['mail']=$row['mail'];
            $_SESSION['rmail']=$row['rmail'];
             
      
       echo "<script>location.href='Welcomepage.php'</script>";
    }
        else
        {
            echo "login failed";
        }

 

}
    } else {
    echo "0 results";
    }
        
    }

 

    $connection->close();

 

    ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <h1 style="text-align: center;">Login</h1>
         <legend style="text-align: center;">Login Info</legend>
             UserName <input type="text" name="uname" value="">

            Password <input type="password" name="password" value="" >              

    <br> <br> <input type="submit" name="login" value="Login">
    <br> <br> <input type="submit" name="fpwd" value="Forget Password">
    <br> <br> <input type="submit" name="signup" value="Signup">
    
</form>
  <?php
    if(isset($_POST["signup"]))
{
    echo "<script>location.href='registation.php'</script>";
}
 ?>
<form method="POST">
  
</form>    
</body>
</html>