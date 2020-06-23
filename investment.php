<!DOCTYPE html>
<html lang="en">
<head>
  <title>Investment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="investment.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="investment.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/RochesterFederal.png" alt="Rochester Federal Bank" width = 30em></a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="Banking.php">Banking</a></li>
        <li class="active"><a href="investment.php">Investment</a></li>
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
  <h1>Investment</h1>
  <p>A smart way to make more</p> 
</div>

<img src="img/invest.jpg" class="invest" alt="investing">
  
<ul class="list">
  <li class="media">
    <img src="img/financialplanning.png" class="mr-3" alt="financial planning">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Economic Planning</h5>
      On occasion it makes experience to manage certain parts of your monetary destiny to your personal. however when you need to know that your investments, financial savings and retirement plan are all running collectively in the direction of a not unusual purpose—you can trust our services to hold them targeted, every day.
      </br>
    </div>
  </li>
  <li class="media my-4">
    <img src="img/retirement.png" class="mr-3" alt="retirement planning">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Planning to Retire</h5>
      An increasing number of people are looking at retirement as a transferring target—many figuring that they’re going to have to work a long way longer than they’d like to. We keep in mind that appropriate making plans today will no longer simplest help keep your attractions on in which you need to be in the future, it will help you get there whilst you need as nicely.
      </br>
    </div>
  </li>
  <li class="media">
    <img src="img/college.png" class="mr-3" alt="College savings plan">
    <div class="media-body">
      <h5 class="mt-0 mb-1">University Plans</h5>
      Your child’s university schooling is no small investment. As a rely of fact, it is able to be the single-largest fee you ever incur. but there are steps we permit you to take, starting right now, wherein the intention is to make that investment far more cheap—with out sacrificing the best of your toddler’s schooling.
      </br>
    </div>
  </li>
  <li class="media">
    <img src="img/moneymanagement.png" class="mr-3" alt="Money Management">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Planning and Controlling Money</h5>
      In nowadays’s economy saving directly what you have is as hard as earning it in the first instance. in terms of managing your investment portfolio, the simplest consistent is alternate. We will let you find out the appropriate stability of chance and reward on the way to help control that change.
      </br>
      &nbsp; &nbsp; &nbsp;
    </div>
  </li>
</ul>

<footer>
  <p>Copyright © Rochester Federal, All Rights Reserved. Terms of Use | Privacy Policy</p>
  <p>Rochester NY USA</p>
</footer>
</body>
</html>
