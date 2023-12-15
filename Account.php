
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accounts</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

<div class="headers">
        <div class="logos">
            <h2>CMS</h2>
        </div>
        <div class="navbars">
            <ul>
            <li><a href="Home.php">Dashboard</a></li>
                <li><a href="Account.php">Account</a></li>
                <li><a href="Double_Entry.php">Double Entry</a></li>
                <li><a href="Journal.php">Journal</a></li>
                <li><a href="Ledger.php">Ledger</a></li>
                <li><a href="Trial_Balance.php">Trial Balance</a></li>
                <li><a href="Balance_Sheet.php">Balance Sheet</a></li>
                <li><a href="Income_Statement.php">Income Statement</a></li>
            </ul>
        </div>
    </div>

 

    

  <div class="content">

  <section class="section">
      <div class="row">
      

        <div class="col-lg-12">

        


              <button type="button" class="btn btn-primary col-4" data-bs-toggle="modal" data-bs-target="#disabledAnimation">
                ADD ACCOUNT
              </button>
              <br>
       
              <div class="col-12">
                <br>
                <div class="card recent-sales overflow-auto">
  
                    <!-- Disabled Animation Modal -->
             

              
              <div class="modal" id="disabledAnimation" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">ADD ACCOUNT FORM</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3" method='post' action='Account.php'>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name='name' placeholder="Your Name">
                    <label for="floatingName">NAME</label>
                  </div>
                </div>

               

                <div class="col-md-12">
                  <div class="form-floating">
                    <select type="text" class="form-control" id="floatingName" name='type' placeholder="Your Name">
                      <option value="asset">Asset</option>      
                      <option value="expense">Expense</option>
                      <option value="liability">Liability</option>
                      <option value="incame">Revenue/Income</option>
                      <option value="equity">Equity</option>
                 
                    </select>
                    <label for="floatingName">TYPE</label>
                  </div>
                </div>

            
      
          
                <div class="text-center">
                  <button type="submit" name='go' class="btn btn-primary">SAVE</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
                    </div>
                  
                  </div>
                </div>
              </div><!-- End Disabled Animation Modal-->

      









  
                  <div class="card-body">
                    <h5 class="card-title">LIST OF ACCOUNTS <span>| </span></h5>
  
                


                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                     
                      
                      <th scope="col">NAME</th>
                      <th scope="col">TYPE</th>
                  

                      <th scope="col" colspan='2'  style="text-align:center;background-color:lightgray;color:black;font-size:0.6cm">Modify</th>
                    </tr>
                  </thead> 
                  <tbody>

                  <?php
                    include './connection1.php';
	
                    $sql = "SELECT * FROM accounts";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                     $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                       ?>
                          <tr>
                          <!-- `id`, `names`, `email`, `subject`, `message` -->
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $row["name"];?></td>
                              <td><?php echo $row["type"];?></td>
               

                              
                              <td> <a href="delete_account.php?id=<?php echo $row["0"]  ?>"><button type="button" class="btn btn-outline-danger btn-sm">delete</button> </a></td>

                              <!-- <td> <a href="delete_customer.php?id=<?php //echo $row["0"]  ?>"><button type="button" class="btn btn-outline-info btn-sm">update</button> </a></td> -->

                    </tr>
                       <?php
                      }
                    } else {
                      //echo "0 results";
                    }
                  ?>
                 
               
              
               
                  </tbody>
                </table>

  
                  </div>
  
                </div>
              </div><!-- End Recent Sales -->
  
            

            </div>
          </div>

       
    </section>

</div>



  






  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div class="footer">
        <p>THIS IS BUSINESS COMPUTING ASSIGNMENT L3 GROUP 2 SUBGROUP 14</p>
    </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
include './connection1.php';

@$go=$_POST["go"];

@$name=$_POST["name"];
@$type=$_POST["type"];

if(isset($go))
{
  if($name!='' || $type!='')
  {



  //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

    $sql = "INSERT INTO `accounts` (`aid`, `name`, `type`) VALUES (NULL, '$name', '$type');";

    if (mysqli_query($conn, $sql)) {
      $sqlxx = "SELECT aid FROM `accounts` WHERE name='$name'";

      $resultxx = $conn->query($sqlxx);

      while($rowx = mysqli_fetch_array($resultxx)) {
        $id=$rowx[0];
      }

      $sqlb ="INSERT INTO `ledger` (`id`, `aid`, `debit`, `credit`, `balance`) VALUES (NULL, '$id', '0','0', '0')";
        if (mysqli_query($conn, $sqlb)) {
        echo '<script>alert("You have successfully added new account ")</script>';
        echo "<script>window.location='./Account.php'</script>";
    }   
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


}else{
  echo '<script>alert("you cant submit empty data")</script>';
}
}
   
?>


<style>

  /* Header cascading style sheet */

    body{
        box-sizing: border-box;
        background-color:white;
        height: 100vh;
        width: 100%;
        font-family: 'Times New Roman', Times, serif;
    }
    *{
        margin: 0;
        padding: 0;
    }
    .logo h2{
        margin-left: 4px;
    }
    .headers{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 95%;
        height: 10vh;
        margin: 20px auto;
        background-color: whitesmoke;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        box-shadow: 3px 3px 6px;
    }
    .navbars{
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    ul{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    ul li{
        list-style-type: none;
        padding: 15px;
       
    }
    ul li a{
        text-decoration: none;
        color: black;
        padding: 10px;
        
    }
    ul li a:hover{
        background-color: rgb(19, 18, 18);
        transition: 0.7s ease-in;
        color: white;

    }

    /* content cascading style sheet */
    .content{
        width: 95%;
        height: 70vh;
        margin: 20px auto;
        background-color: whitesmoke;
        border-bottom: 5px solid rgb(185, 204, 240);
        border-right: 5px solid rgb(185, 204, 240);
        overflow:scroll;
        
    }
    .footer{
        width: 95%;
        height: 10vh;
        margin: 20px auto;
        background-color: black;
        opacity: 0.5;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        color: white;
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
    }
</style>