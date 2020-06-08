<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rochester Federal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="home.js"></script>
  
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/RochesterFederal.png" alt="Rochester Federal Bank" width = 30em></a>
        </div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/home.php">Home</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/Banking.php">Banking</a></li>
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
  <h1>Rochester Federal</h1>
  <p>The Bank who has your back</p> 
</div>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/firstImage.png" alt="Building That is A Bank" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/RochesterFederalApp.png" alt="Inside a Bank" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/thirdImage.png" alt="Money in front of ATM" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> <!--Container-->

  <a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/AboutUs.php">
    <div class = "image">
      <img src="img/FindOut.png" alt="Make Investments" style="width:100%;">
    </div>
  </a>

<div class = "container">

  <a href="https://www.visa.com/atmlocator/#(page:home)">
    <div class = "LearnMoreBoxes">
        <img src="img/LocateAnATM.png" alt="Find An ATM" style="width:20em;">
    </div>
  </a>

  <a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/insurance.php">
    <div class = "LearnMoreBoxes">
        <img src="img/GetInsurance.png" alt="Get Insurance" style="width:20em;">
    </div>
  </a>

  <a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/investment.php">
    <div class = "LearnMoreBoxes">
        <img src="img/MakeInvestments.png" alt="Make Investments" style="width:20em;">
    </div>
  </a>

</div> <!--container-->

<footer>
  <p>Copyright © Rochester Federal, All Rights Reserved. Terms of Use | Privacy Policy</p>
  <p>Rochester NY USA</p>
</footer>
</body>
</html>
