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
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/home.php">Home</a></li>
        <li class="active"><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/Banking.php">Banking</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/investment.php">Investment</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/insurance.php">Insurance</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/resources.php">Resources</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/AboutUs.php">About Us</a></li>
        </ul>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">
          
          <form class="modal-content animate" action="file:///Users/juliannabaker/Documents/GitHub/RochesterFederal/action_page.php" onsubmit="validateForm()" method="POST">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="img/RochesterFederalBackground.png" alt="Avatar" class="avatar">
            </div>

            <div class="containerLogin">
              <label for="uname"><b>Username</b></label>
              <input id="uname" type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input id="pass"type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit" onclick="window.location.href = 'https://people.rit.edu/jlb2886/Sites/RochesterFederal/action_page.php';" >Login</button> <!--relocating to action_page.php-->
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
        <li>online & cell Banking covered with mobile check Deposit, invoice Pay and P2P bills</li>
        <li>access to over forty three,000 surcharge-unfastened ATMs national</li>
        <li>1 container of preferred assessments in step with yr protected</li>
        <li>Overdraft Line of credit to be had subject to application and credit approval</li>
        <li>Elective Paper or eStatement covered</li>
        <li>Savings Overdraft Sweep1, in case you overdraw your bank account, funds may be transferred from your financial savings account.  </li>
        <li>Limitless check Writing</li>
        <li>Cash back Rewards, receive $zero.05 cash back for each 5 big name bank Debit Card/ATM POS Transaction2 published over 15 for the duration of the statement period
        </li>
        <li>Secure Deposit container Discount3, $20 bargain on any size field in step with year</li>
        <li>ATM fee Credits4, acquire as much as $10 per statement period for non-5 famous person bank ATM fees</li>
        <li>ATM Surcharge credits, get hold of up to $10 according to declaration length for ATM Surcharge costs</li>
        <li>Hobby Bearing Account</li>
        <li>No rate cash Orders and Cashier tests</li>
        <li>Favored Deposit Account prices</li>
        <li>Preferred private mortgage and domestic equity mortgage Rates5</li>
        <li>Service Costs, $25.00 in step with statement period </br> The service charge does now not practice when you have: </br>A combined overall consumer deposit accounts and/or mortgage balances of $25,000 or extra at the quit of the activity duration
        </br>OR Direct deposits totaling at the least $5,000 into the account throughout the hobby period</li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul>
        <h3>Money Market</h3>
        <p>Seeking to earn interest? Still have to get the right of entry to your funds? This account allows you to earn interest with constrained check writing skills!</p>
        <li>$10.00 monthly protection charge</li>
        <li>$2,500 common each day balance  to avoid fee</li>
        <li>Earns interest (Tiered charges)</li>
        <p></br>Online Banking Account get entry to a cash market account with limited check writing capabilities and favored hobby quotes for our most reliable checking account holders.</p>
        <li>$12.00 month-to-month preservation fee</li>
        <li>$10,000 average daily stability to avoid charge</li>
        <li>Earns interest (Tiered charges)</li>
        <li>Online Banking Account access</li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul>
        <h3>Statement Services</h3>        
        <p>An easy and inexpensive manner to store for the future, and to earn some interest whilst doing it!</p>
        <li>five dollars monthly preservation charge*</li>
        <li>Three hundred dollars average everyday stability to avoid the fee</li>
        <li>Earn interest</li>
        <li>Online Banking Account</li>
        <li>Financial savings Overdraft Sweep2</li>
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
