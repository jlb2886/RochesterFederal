<!DOCTYPE html>
<html lang="en">
<head>
  <title>Congratulations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="action_page.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="action_page.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/RochesterFederal.png" alt="Rochester Federal Bank" width = 30em></a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Banking</a></li>
        <li><a href="#">Investment</a></li>
        <li><a href="#">Insurance</a></li>
        <li><a href="#">Resources</a></li>
        <li><a href="#">About Us</a></li>
        </ul>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">
          
          <form class="modal-content animate" action="/action_page.php" onsubmit="validateForm()" method="POST">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="img/RochesterFederalBackground.png" alt="Avatar" class="avatar">
            </div>

            <div class="containerLogin">
              <label for="uname"><b>Username</b></label>
              <input id="uname" type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input id="pass"type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit">Login</button>
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

    <div class = "container">
        <h4>Congratulations!</h4>
        <p> Thank you for trying to login to this site. You are actually on a website that is not a real business. This is a simulation.
            Do not worry we did not save any of the information you entered into this form. Be safe out there! </p>
        <h5>You have earned yourself stickers! You may click the stickers below to download them and use them on your zoom background.</h5>
        &nbsp;
        <a href="img/BankSticker.png" download="sticker">
        <img class = "stickers" src="img/BankSticker.png" alt="Bank sticker" width="300">
        </a>
        <a href="img/TechSticker.png" download="sticker">
        <img class = "stickers" src="img/TechSticker.png" alt="Bank sticker" width="300">
        </a>
    </div>

</body>
</html>