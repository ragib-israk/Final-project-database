<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>

<?php 
    session_start();
    /*$password=$_POST['password'];*/
    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "customer";
    $con1 = new mysqli($host, $user, $pass, $db);
    if($con1->connect_error) {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $con1->connect_error;
    }
    else{
       if(isset($_POST['update']))
    {   $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        
        $mail=$_POST['mail'];
        $rmail=$_POST['rmail'];

       $sq = "UPDATE user SET fname='$fname' where uname =".$_SESSION['username']."";
       $sq2 = "UPDATE user SET lname='$lname' where uname =".$_SESSION['username']."";
       $sq3 = "UPDATE user SET password='$password' where uname =".$_SESSION['username']."";
       $sq4 = "UPDATE user SET address='$address' where uname =".$_SESSION['username']."";
      
       $sq5 = "UPDATE user SET mail='$mail' where uname =".$_SESSION['username']."";
       $sq6 = "UPDATE user SET rmail='$rmail' where uname =".$_SESSION['username']."";
      
        if ($con1->query($sq) === TRUE && $con1->query($sq2) === TRUE && $con1->query($sq3) === TRUE && $con1->query($sq4) === TRUE && $con1->query($sq5) === TRUE && $con1->query($sq6) === TRUE)  { 
         echo "PROFILE UPDATED";
        } else {
         echo "Error updating record: " . $con1->error;
        }
     }
     if(isset($_POST['delete']))
     {
       
         $sq6 = "DELETE FROM user where uname =".$_SESSION['username']."";
         if ($con1->query($sq6) === TRUE) {
         echo "Deleted";
        } else {
         echo "Error updating record: " . $con1->error;
         }
     }
    }

    ?>

    <body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

    <center>
    <h2>Profile</h2>
        <table>
        <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fname" value="<?php echo $_SESSION['firstname'] ;?>" >
                    </td>
                </tr>

                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        <input type="text" name="lname" value="<?php echo $_SESSION['lastname'] ;?>" >
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="text" name="gender" value="<?php echo $_SESSION['gender'] ;?>" >
                    </td>
                </tr>

                    <td>
                        UserName 
                    </td>
                    <td>
                        <input type="text" name="uname" value="<?php echo $_SESSION['username'] ;?>" >
                    </td>
                    </tr>

                    <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="text" name="password" value="<?php echo $_SESSION['password'] ;?>" >
                    </td>
                    </tr>

                    <tr>
                    <td>
                         Email
                    </td>
                    <td>
                        <input type="email" name="email"  value="<?php echo $_SESSION['mail'] ;?>" >
                    </td>
                    </tr>

                    <tr>
                    <td>
                        Recovery Email
                    </td>
                    <td>
                        <input type="email" name="rmail" value="<?php echo $_SESSION['rmail'] ;?>" >
                    </td>
                     </tr>

                     

    </table>
    <input  type="submit" name="back" value="Back">
    <input  type="submit" name="update" value="Update">
     <input  type="submit" name="delete" value="Delete">

    <?php
    if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcomepage.php'</script>";
}
//if(isset($_POST["update"]))
//{
    //echo "<script>location.href='registation.php'</script>";
//}

?>
    
    
    
                    

</form>
    
</body>
</html>
</body> 