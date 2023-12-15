<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double Entry</title>

    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>accounts</title>
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
    <section class="section">
      <div class="row">
      

        <div class="col-lg-12">

   
       
              <div class="col-12">
                <br>
                <div class="card recent-sales overflow-auto">
  
                  <div class="card-body">
                  <form class="row g-3" method='post' action='Double_Entry.php'>
                  <table class="table table-striped" style='margin-top:-3cm'>
                 
                  <thead> <center> <h5 class="card-title"><div class="col-md-2">
                  <div class="form-floating">
                   <select type="text" class="form-control" id="floatingName" name='account1' placeholder="Your Name">
                    <center> 
                      
                      
                    <?php
                    include './connection1.php';
	
                    $sql = "SELECT * FROM accounts";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                  
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                       ?>
                         <option value="<?php echo $row['0'] ?>"><?php echo $row['1']; ?></option>
                       <?php
                      }
                    } else {
                      ?>
                     <option disabled>0 accounts</option>
                      <?php
                    }
                  ?>
                    </center>
                    </select>
                    <label for="floatingName">Choose Account</label>
                  </div>
                </div> <span>| </span></h5></center>
                    <tr>
                      
                      <th scope="col">DR</th>
                      <th scope="col" style='text-align:right'>CR</th>
                  

                    </tr>
                  </thead> 
                  <tbody>

               
                          <tr style='height:4cm' class='myr'>
                             <td style='border-right:4px solid black'>

                             <br> <br> 

                                <div class="form-floating">
                                  <input type="number" class="form-control" id="floatingName" name='d1' placeholder="Your Name">
                                  <label for="floatingName">Dr Amount</label>
                                </div>
                            </td>
                          
                            
                                <td style='border-left:4px solid red'>
                                <br>  <br> 
                                  <div class="form-floating">
                                      <input type="number" class="form-control" id="floatingName" name='c1' placeholder="Your Name">
                                      <label for="floatingName">Cr Amount</label>
                                    </div>
                              </td>

                         </tr>
                         <tr>
                               
                         </tr>
               
                  </tbody>

                 
                </table>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------ -->
                <table class="table table-striped" style='margin-top:-3cm'>
                 
                 <thead> <center> <h5 class="card-title"><div class="col-md-2">
                 <div class="form-floating">
                  <select type="text" class="form-control" id="floatingName" name='account2' placeholder="Your Name">
                   <center> 
                   <?php
                    include './connection1.php';
	
                    $sql = "SELECT * FROM accounts";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                  
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                       ?>
                         <option value="<?php echo $row['0'] ?>"><?php echo $row['1']; ?></option>
                       <?php
                      }
                    } else {
                      ?>
                     <option disabled>0 accounts</option>
                      <?php
                    }
                  ?>
                    
                    </center>
                   </select>
                   <label for="floatingName">Choose Account</label>
                 </div>
               </div> <span>| </span></h5></center>
                   <tr>
                     
                     <th scope="col">DR</th>
                     <th scope="col" style='text-align:right'>CR</th>
                 

                   </tr>
                 </thead> 
                 <tbody>

              
                         <tr style='height:4cm' class='myr'>
                            <td style='border-right:4px solid black'>

                            <br> <br> 

                               <div class="form-floating">
                                 <input type="number" class="form-control" id="floatingName" name='d2' placeholder="Your Name">
                                 <label for="floatingName">Dr Amount</label>
                               </div>
                           </td>
                         
                           
                               <td style='border-left:4px solid red'>
                               <br>  <br> 
                                 <div class="form-floating">
                                     <input type="number" class="form-control" id="floatingName" name='c2' placeholder="Your Name">
                                     <label for="floatingName">Cr Amount</label>
                                   </div>
                             </td>

                        </tr>
                        <tr>
                              
                        </tr>
              
                 </tbody>

                
               </table>
               <div class="text-center">
                  <button type="submit" name='go' class="btn btn-primary">SAVE</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                
                </form><!-- End floating Labels Form -->

  
                  </div>
  
                </div>
              </div><!-- End Recent Sales -->
  
            

            </div>
          </div>

       
    </section>
     

    </div>
    <div class="footers">
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

@$a1=$_POST["account1"];
@$a2=$_POST["account2"];


@$d1=$_POST["d1"];
@$d2=$_POST["d2"];

@$c1=$_POST["c1"];
@$c2=$_POST["c2"];
$date=Date("m/d/y");


if(isset($go))
{
  
  if($d1=="")
  {
    $d1=0;
  }
  if($d2=="")
  {
    $d2=0;
  }
  if($c1=="")
  {
    $c1=0;
  } 
  if($c2=="")
  {
    $c2=0;
  }

  if($d1==0 && $d2==0 && $c1==0 && $c2==0)
  {
    echo '<script>alert("add data Dear !!")</script>';
  }
  else if($d1!==0 &&  $c1!==0 || $d2!==0 &&  $c2!==0  )
  {
    echo '<script>alert("That mistack ! you can not debit and credit account at the same time")</script>';
  }

  else if($d1==0 &&  $d2==0 || $c2==0 &&  $c1==0  )
  {
    echo '<script>alert("That mistack ! use debit credit rule in dable entry")</script>';

  }
  else if($a1==$a2)
  {
    echo '<script>alert("That mistack ! change accounts ! you select the same accounts")</script>';

  }
  else if($d1!=$c2 || $d2!=$c1)
  {
    echo '<script>alert("That mistack ! amount must equal")</script>';

  }else{

    // _________________________________________    FIRST ACCOUNT    ______________________________________________________________

    $sql = "INSERT INTO `jurnal` (`id`, `aid`, `debit`, `credit`,`date`) VALUES (NULL, '$a1', '$d1', '$c1','$date')";

    if (mysqli_query($conn, $sql))
           {        
                  $sql = "SELECT sum(credit) as totalc,sum(debit) as totald FROM `ledger` WHERE aid=$a1";

                  $resultb = $conn->query($sql);
                  while($row = mysqli_fetch_array($resultb))
                   {

                      echo $debits=intval($row['totald']) ;
                      echo $credits=intval($row['totalc']); 
                      // UPDATE `ledger` SET `debit` = '1009', `credit` = '2', `balance` = '08' WHERE `ledger`.`id` = 2;
                   }
                  $newD=$debits+$d1."</br>";
                  $newC=$credits+$c1."</br>";

                   $balance=$newD-$newC;
                   if($balance<0)
                   {
                     $balance=$balance*-1;
                   }
                   $sql="UPDATE `ledger` SET `debit` = '$newD', `credit` = '$newC', `balance` = '$balance' WHERE `ledger`.`aid` = $a1";

                  mysqli_query($conn, $sql);
          }
// _________________________________________    SECOND ACCOUNT     _______________________________________________________________

    $sql2 = "INSERT INTO `jurnal` (`id`, `aid`, `debit`, `credit`,`date`) VALUES (NULL, '$a2', '$d2', '$c2','$date')";
    if (mysqli_query($conn, $sql2)) 
    {
                $sql = "SELECT sum(credit) as totalc,sum(debit) as totald FROM `ledger` WHERE aid=$a2";
                $resultb = $conn->query($sql);
                while($row = mysqli_fetch_array($resultb))
                {
                    echo $debits=intval($row['totald']) ;
                    echo $credits=intval($row['totalc']); 
                    // UPDATE `ledger` SET `debit` = '1009', `credit` = '2', `balance` = '08' WHERE `ledger`.`id` = 2;
                }
                $newD=$debits+$d2."</br>";
                $newC=$credits+$c2."</br>";

                $balance=$newD-$newC;
                if($balance<0)
                {
                  $balance=$balance*-1;
                }
                $sql="UPDATE `ledger` SET `debit` = '$newD', `credit` = '$newC', `balance` = '$balance' WHERE `ledger`.`aid` = $a2";

                mysqli_query($conn, $sql);
                echo '<script>alert("well done")</script>';
    }
  }
 
 
 

}
   
?>

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
    .footers{
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