<!DOCTYPE html>
<html lang="en">
<head>
  <title>Banking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Banking.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="Banking.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/RochesterFederal.png" alt="Rochester Federal Bank" width = 30em></a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="Banking.php">Banking</a></li>
        <li><a href="investment.php">Investment</a></li>
        <li><a href="insurance.php">Insurance</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        </ul>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">
          
          <form class="modal-content animate" action="action_page.php" onsubmit="validateForm()" method="POST">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="img/RochesterFederalBackground.png" alt="Avatar" class="avatar">
            </div>

            <div class="containerLogin">
              <label for="uname"><b>Username</b></label>
              <input id="uname" type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input id="pass"type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit" onclick="window.location.href = 'action_page.php';" >Login</button> <!--relocating to action_page.php-->
              <p id = "valid"></p></p>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="containerLogin" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div> <!--This will pop up a login form for the user-->

    </div>
    </nav>

<marquee behavior="scroll" direction="left">~ Checking Interest Rates: 0.05% from $0.01 to $24,999.99 | 0.10% from $25,000 to $49,999.99 | 0.12% on $50,000 or higher
                                                             ~ Savings Interest Rate: 0.04% on all accumulated money in account | Thank you for reading. You are on a website that does not portray a real business.
                                                             Everything you read about Rochester Federal is just for the simulation.</marquee>


<div class="jumbotron text-center">
  <h1>Banking</h1>
  <p>We are here to help</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <ul>
        <h3>Checking</h3>
        <p>Our ideal Checking has the most flexibility on all our offerings. Earn interest, get cashback rewards, and obtain preferred costs on deposit money owed.</p>
        <li>Online & Cell Banking covered with mobile check Deposit, invoice Pay and P2P bills.</li>
        <li>Access to over 43,000 surcharge-unfastened ATMs national.</li>
        <li>One box standard assessment in step with year protection.</li>
        <li>Overdraft Line of credit approval.</li>
        <li>Choice of paper or e-statement covered.</li>
        <li>Savings Overdraft Sweep, in case you overdraw your bank account, funds may be transferred from your financial savings account.</li>
        <li>Limitless check writing</li>
        <li>Cash back Rewards, receive $0.05 cash back for each 5 major bank Debit Card/ATM POS transactions, published over 15 for one statement period. </li>
        <li>Secure Deposits at any time, $20 bargain on any size field in step within a year.</li>
        <li>ATM fee Credits4, acquire as much as $10 per statement period for non-5 famous person bank ATM fees</li>
        <li>ATM fee credit: get up to $10 per statement period for non- Rochester Federal bank ATM fees.</li>
        <li>ATM Surcharge credits: get up to $10 per statement period for ATM Surcharge costs.</li>
        <li>Get interest on all your savings.</li>
        <li>No fee collected for money orders.</li>
        <li>Favored Deposit Account prices</li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul>
        <h3>Money Market</h3>
        <p>Seeking to earn interest? Still have to get the right of entry to your funds, this account allows you to earn interest with constrained check writing skills!</p>
        <li>$10.00 monthly protection charge.</li>
        <li>$2,500 common each day balance to avoid fee.</li>
        <li>Earns interest (Tiered charges)</li>
        <p></br>Online Banking Account get entry to a cash market account with limited check writing capabilities and favored hobby quotes for our most reliable checking account holders.</p>
        <li>$12.00 month-to-month preservation fee.</li>
        <li>Earns interest (Tiered charges).</li>
        <li>Online Banking account access.</li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul>
        <h3>Statement Services</h3>        
        <p>An easy and inexpensive manner to store for the future, and to earn some interest whilst doing it!</p>
        <li>Five dollars monthly preservation charge.</li>
        <li>$300 average everyday stability to avoid the fee.</li>
        <li>Earn interest on all your savings.</li>
        <li>Multiple online banking account access.</li>
        <li>Financial savings Overdraft Sweep.</li>
        <li>In case you overdraw your checking account, finances may be transferred from your savings account.</li>
        <p></br>*Account has no month-to-month protection fee or minimum balance if the primary account of the baking account is 18 of age or younger.</p>
      </ul>
    </div>
  </div>
</div>
<footer>
  <p>Copyright © Rochester Federal, All Rights Reserved. Terms of Use | Privacy Policy</p>
  <p>Rochester NY USA</p>
</footer>
</body>
</html>
