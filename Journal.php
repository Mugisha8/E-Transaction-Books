<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal</title>
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
  <style>
    .myr{
      margin:4px
    }

    </style>
</head>
<body>
    <div class="header">
        <div class="logos">
            <h2>E-Transaction Books</h2>
        </div>
        <div class="navbar">
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
    <!-- <main id="main" class="main"> -->

    

<section class="section">
  <div class="row">
  

  
    

    <!-- <div class="col-xxl-2 col-md-2"></div> -->
    <div class="card-body titlex">
            <center><h4><b>JURNAL</b></h4>  </center>
                </div>
        <!-- <div class="col-2"></div> -->
         <center><div class="col-8">
            <br>
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">date</th>
                 
                  
                  <th scope="col">Account</th>
                  <th scope="col">debit</th>
                  <th scope="col">credits</th>
                
                 
                </tr>
              </thead> 
              <tbody>

          
                    
                      
                       <?php
                include './connection1.php';
                $sqlx = "SELECT sum(credit) as total FROM `jurnal`,`accounts` WHERE accounts.aid=jurnal.aid";
                $resultx = $conn->query($sqlx);
                while($rowx = mysqli_fetch_array($resultx)) {
                  $total= $rowx["0"];
                }


                $sql = "SELECT date,name,debit,credit FROM `jurnal`,`accounts` WHERE accounts.aid=jurnal.aid";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                 $i=0;
                  while($row = mysqli_fetch_array($result)) {
                   $i++;
                   $d=$row["2"];
                   $c=$row["3"];
                   if($d=='0')
                   {
                    $d='';
                   }
                   if($c=='0')
                   {
                    $c='';
                   }

                   ?>
                      <tr>
                      <!-- `id`, `names`, `email`, `subject`, `message` -->
                    
                          <td><?php echo $row["0"];?></td>
                          <td><?php echo $row["1"];?></td>
                          
                          <td><?php echo $d;?></td>
                          <td><?php echo $c;?></td>
                         
 
                          
                </tr>
                   <?php
                  }
                } else {
                  // echo "0 results";
                }
              ?>
             
                      

                       <tr style="border-top:4px solid black">
                          <th colspan='2' style="text-align:center;background-color:lightgray"> <b>TOTAL</b></th>
                         
                          <td><?php echo $total; ?></td> <td><?php echo $total; ?></td>
                         
                       </tr>  
                       
                       
          
                
           
          
           
              </tbody>
            </table>


              </div>

            </div>
          </div><!-- End Recent Sales -->

          </center> 

        </div>
      </div>

   
</section>

<!-- </main>End #main -->

    </div>
    <div class="footer">
        <p>THIS IS BUSINESS COMPUTING ASSIGNMENT L3 GROUP 2 SUBGROUP 14</p>
    </div>
</body>
</html>

<style>

  /* Header cascading style sheet */

    body{
        box-sizing: border-box;
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
    .header{
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
    .navbar{
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