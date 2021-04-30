<body style="background: url(https://img.freepik.com/free-vector/illustration-online-marketplace-with-shop-stall-selling-booths-search-compare-items-marketplace_4968-1239.jpg?size=626&ext=jpg);background-size :100% 120%">  

</body> 




<?php 
    session_start();
    /*$username=$_POST['uname'];
    $password=$_POST['password'];*/
  $productname=$_POST['pname'];
    $productprice=$_POST['price']; 

    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "customer";

    $con1 = new mysqli($host, $user, $pass, $db);
    if($con1->connect_error)
     {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $con1->connect_error;
    }
 
    else {
        echo "Database Connection Successful!";
        $st1 = $con1->prepare("insert into productlist (pname, price) VALUES (?, ?)");
        $st1->bind_param("ss", $f1, $f2);
        $f1 = $_POST['pname'];
        $f2 = $_POST['price'];
   

        
        $status = $st1->execute();
         $sql = "SELECT * FROM productlist";
         $result = $con1->query($sql);
        if($status) {
            echo "Data Insertion Successful.";
        
        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $con1->error;
        }
      
      
           if ($result->num_rows > 0)
            {
 
            while($row = $result->fetch_assoc()) 
            {
          echo "Product Name: " . $row["pname"]. " - Product Price: " . $row["price"].  "<br>";
   
           }
        
       }
     }

    

    $con1->close();
    ?>


<body>  

 

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
       <h1 style="text-align: center;">Productlist</h1>
        <table width="50%" align="center">

 

            <tr >

 

                <td colspan="3" align="center">

 

                    <i>
                   
                    

 

                </td>

 

 

            </tr>

 

            <tr>

 

                <td width="30%" align="center">

 

                   <b> <p style="font-size: 16px;">Product Name</p>

 

                </td>

 

                <td width="60%"align="center">

 

                    <input type="text" name="pname"  placeholder="Type Product Name" size="30px" required>

 

                </td>

 

                <td width="10%">

 


                </td>

 

 

            </tr>

 

            <tr>

 

                <td width="30%" align="center">

 

                   <b> <p style="font-size: 16px;">Product price</p>

 

                </td>

 

                <td width="60%"align="center">

 

                    <input type="text" name="price"  placeholder="Type Product Price" size="30px" required>
                    

 

                </td>

              


                <td width="10%">

 


                </td>

 

 

            </tr>

 


            <tr height="50px">

 

                <td align="right"  colspan="3">

 

                    <input type="submit" name="submit" value="Add"> 
                      <input type="submit" name="submit" value="Buy"> 
                       <input type="submit" name="submit" value="Cancel"> 
                  <div class="lnk"><a href="../final/Welcomepage.php"  name="rBtn">back</a></div>

 

 

                </td>

 


            </tr>

 


        </table>

 

 

    </form>

 

   
    
</body>

 


         </tr>
         <?php
         if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcomepage.php'</script>";
}
?>
</div>