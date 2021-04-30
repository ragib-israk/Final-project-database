




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<?php
session_start();
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

             <div class="lnk"><a href="../final/updateprofile.php"  name="rBtn">Update Profile</a></div>  

    </table>
  

    <?php
    if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcomepage.php'</script>";
}
if(isset($_POST["update"]))
{
    echo "<script>location.href='updateprofile.php'</script>";
}

?>
    
    
    
                    

</form>
    
</body>
</html>
</body> 