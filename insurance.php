<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insurance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="insurance.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="insurance.js"></script>
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
        <li class="active"><a href="insurance.php">Insurance</a></li>
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
  <h1>Insurance</h1>
  <p>We have you covered</p> 
</div>
  
<div class="container">

  <div class = "insuranceTypes">
    <div class="card">
      <img src="img/autoInsurance.jpg" alt="Auto Insurance" style="width:100%">
      <div class="containerCard">
      <p>Auto Insurance</p>
      </div>
    </div>
    <div class = "cardDescription">
      <h3>Auto Insurance</h3>
      <p>Accident protection is one of the most important things to get to keep you and your loved
      ones under a safety umbrella. Our car strategy is intended to guarantee your vehicle to keep
      you, family, and friends secured. We go the additional mile to bring you genuine feelings of
      serenity any place the street takes you.</p>
    </div>
  </div> <!--Insurance Types-->

  <div class = "insuranceTypes">
    <div class="card">
      <img src="img/homeownersInsurance.jpg" alt="Homeowners Insurance" style="width:100%">
      <div class="containerCard">
      <p>Homeowners Insurance</p>
      </div>
    </div>
    <div class = "cardDescription">
      <h3>Homeowners Insurance</h3>
      <p>Home is the place the heart is. Our property holder's strategy is a bundle arrangement that
      incorporates inclusions for a home, its possessions, and the inhabitant's liability. We go well
      beyond today to ensure what's imperative to you is secured tomorrow. See the amount you could
      spare.</p>
    </div>
  </div> <!--Insurance Types-->

  <div class = "insuranceTypes">
    <div class="card">
      <img src="img/rentersInsurance.jpg" alt="Renters Insurance" style="width:100%">
      <div class="containerCard">
      <p>Renters Insurance</p>
      </div>
    </div>
    <div class = "cardDescription">
      <h3>Renters Insurance</h3>
      <p>Most tenants are uninformed of exactly how moderate leaseholder's protection can be, and how significant 
        it really is. You might have the option to buy inclusion for LESS THAN $0.60 per day! Our tenant's arrangement 
        is a bundle strategy that incorporates inclusions for individual property, its substance, and the inhabitant's 
        obligation. In addition, you might have the option to get a Protective Device Discount on your tenant's inclusion! 
        Defensive gadgets incorporate things, for example, deadbolt locks, sprinkler frameworks, fire quencher, or a porter. 
        We're here to ensure that you have the security you need when the need emerges.</p>
    </div>
  </div> <!--Insurance Types-->

  <div class = "insuranceTypes">
    <div class="card">
      <img src="img/specialtyInsurance.jpg" alt="Specialty Insurance" style="width:100%">
      <div class="containerCard">
      <p>Specialty Insurance</p>
      </div>
    </div>
    <div class = "cardDescription">
      <h3>Specialty Insurance</h3>
      <p>We offer claim to fame inclusion that secures things like RVs, cruisers, pontoons and stream skis, snowmobiles, 
        and ATVs. Get in touch with us today to become familiar with our protection choices.</p>
    </div>
  </div> <!--Insurance Types-->

  <div class = "insuranceTypes">
    <div class="card">
      <img src="img/collectablesInsurance.jpg" alt="Collectables Insurance" style="width:100%">
      <div class="containerCard">
      <p>Collectables Insurance</p>
      </div>
    </div>
    <div class = "cardDescription">
      <h3>Collectables Insurance</h3>
      <p>We offer individual protection arrangements to cover your adornments, compelling artwork, collectibles, hides, 
        silver, stamp assortments, and substantially more. Get in touch with us today to get familiar with collectibles 
        protection.</p>
    </div>
  </div> <!--Insurance Types-->

  <div class = "insuranceTypes">
    <div class="card">
      <img src="img/lifeInsurance.jpg" alt="Life Insurance" style="width:100%">
      <div class="containerCard">
      <p>Life Insurance</p>
      </div>
    </div>
    <div class = "cardDescription">
      <h3>Life Insurance</h3>
      <p>Let our authorized experts assist you with giving the security and genuine feelings of serenity you need for your 
        family. We offer a wide scope of protection items that can be structured around your family's needs, to secure them 
        against an abrupt loss of your salary because of handicap or passing. We'll likewise set aside the effort to clarify 
        every one of your alternatives, so you can settle on the best decision for your family.</p>
    </div>
  </div> <!--Insurance Types-->
  <button type="submit" onclick="window.location.href = 'resources.php';" >Get A Rate Quote</button>
</div>
<footer>
  <p>Copyright © Rochester Federal, All Rights Reserved. Terms of Use | Privacy Policy</p>
  <p>Rochester NY USA</p>
</footer>
</body>
</html>
