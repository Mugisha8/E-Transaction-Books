<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="header">
        <div class="logo">
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

    </div>
    <div class="footer">
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