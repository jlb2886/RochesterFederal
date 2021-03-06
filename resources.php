<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resources</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="resources.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="resources.js"></script>
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
        <li><a href="investment.php">Investment</a></li>
        <li><a href="insurance.html">Insurance</a></li>
        <li class="active"><a href="resources.php">Resources</a></li>
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
              <button type="submit" onclick="window.location.href = 'action_page.php';">Login</button> <!--relocating to action_page.php-->
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
  <h1>Resources</h1>
  <p>Our location and more information</p> 
</div>

<div class = "container">
  <iframe class = "map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5819.913294138795!2d-77.62014994374599!3d43.168434169653615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6b44f404f0167%3A0x29ea67ed0bbe6627!2s690%20St%20Paul%20St%2C%20Rochester%2C%20NY%2014605!5e0!3m2!1sen!2sus!4v1591146119227!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  <div class = "mapInfo">
      <h4>Hours</h4>
      <p>Monday: 7:00 AM - 5:00 PM</p>
      <p>Tuesday: 7:00 AM - 5:00 PM</p>
      <p>Wednesday: 7:00 AM - 5:00 PM</p>
      <p>Thursday: 7:00 AM - 5:00 PM</p>
      <p>Friday: 7:00 AM - 4:00 PM</p>
      <p>Saturday: 9:00 AM - 4:00 PM</p>
      <p>Sunday: 11:00 AM - 4:00 PM</p>
      <h6 class = "address">690 St Paul St, Rochester, NY 14605</h6>
      <h6 class = "address">Contact Us: </br></br>+1(585)360-0247</br>rfb@sudomail.com</h6>
  </div>
</div>

<div class = "container">
    <div class="info">
    <label for="example"><h4>Leave Us A Comment</h4></label>
    <input id="example" type="text" name="Ntext" size="20">
    <input id="sent" type="submit" value="Send"> 
    </div>
    <div class = "commentSection">
        <div class = "comments">
            <p>I need help finding how to save as a student in college can you help me? -Jennifer</p>
            <p><b>Hi Jennifer! You can locate that information in the Investment tab. Let me know if you need anything else! - Rochester Federal Customer Support</b></p>
            <p id="para"></p>
        </div>
    </div>
</div>

<footer>
  <p>Copyright © Rochester Federal, All Rights Reserved. Terms of Use | Privacy Policy</p>
  <p>Rochester NY USA</p>
</footer>
</body>
</html>