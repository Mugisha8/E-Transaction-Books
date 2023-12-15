<?php
                   include './connection1.php';     
                     $id= $_GET['id'];
                   
                   
                     $my_q ="delete from accounts  WHERE `aid` ='$id'";
                     $results= $conn->query($my_q);
                     
                     if ($results) {
                     


                       echo '<script>alert("Your account has successfully modified")</script>';
                       echo "<script>window.location='./Account.php'</script>";
                 
                       
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                 
                     mysqli_close($conn);
                   
                  
             ?>