<!DOCTYPE html>
<html lang="en">
<head>
  <title>Congratulations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="AboutUs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="AboutUs.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/RochesterFederal.png" alt="Rochester Federal Bank" width = 30em></a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/home.php">Home</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/Banking.php">Banking</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/investment.php">Investment</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/insurance.php">Insurance</a></li>
        <li><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/resources.php">Resources</a></li>
        <li class="active"><a href="https://people.rit.edu/jlb2886/Sites/RochesterFederal/AboutUs.php">About Us</a></li>
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
                
              <button type="submit" onclick="window.location.href = 'https://people.rit.edu/jlb2886/Sites/RochesterFederal/action_page.php';">Login</button>
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
        <h1>About Us</h1>
        <p>Learn more about Rochester Federal</p> 
    </div>

    <img class = "representatives" src="img/representatives.jpg" alt="Our Representatives" style="width:50%">

    <div class = "container">
        <h4>Learn More About Rochester Federal</h4>
        <p> Rochester Federal Bank is a $2 billion community bank offering a wide scope of purchaser and business banking and 
            loaning administrations to people, regions, and organizations throughout our local Rochester area. We have had 
            our customers back for over 30 years and plan to continue staying strong through difficult times. </br></br>
            We have a devoted group of in excess of 100 representatives who cooperate in a domain of trust, 
            respectability and common regard. Our clients are at the core of our association, where each connection is an 
            open door for us to convey a well disposed, proficient, relationship-building experience. We invest 
            wholeheartedly in being a piece of every single network we serve and are focused on giving back through an 
            assortment of non-benefit associations. </br></br>
            We are not a real business and this is for the simulation and educational use only. This website was created 
            in order to help students and educators feel connected to the world in this simulation. </p>

    </div>

<footer>
  <p>Copyright © Rochester Federal, All Rights Reserved. Terms of Use | Privacy Policy</p>
  <p>Rochester NY USA</p>
</footer>

</body>
</html>