
<?php include("config.php");?>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="en" dir="ltr">
<head>
<!-- Character set configuration -->
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type='x-template' id="banner-template">
  <div class"banner banner-top alert-primary active" role="alert">
    Username Not Exists
    <span class="banner-close"></span>
  </div>
</script>
<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
<!-- Google web font  -->
<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700|Roboto:300,400,500" rel="stylesheet">
<!-- Character set configuration -->
<title>Registration Details</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Viewport configuration, scaling options -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/registration-frm-1.css" rel="stylesheet">
<!-- Font Awesome icon -->
<link href="css/font-awesome.min.css" rel="stylesheet">
      <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins');
      /* BASIC */
      body
      {
        font-family: "Poppins", sans-serif;
        height: 100vh;
      }
      a
      {
        color: #92badd;
        display:inline-block;
        text-decoration: none;
        font-weight: 400;
      }
      /* STRUCTURE */
      .wrapper
      {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 10px;
      }
      #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
        box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
        text-align: center;
      }
      #formFooter {
        background-color: #f6f6f6;
        border-top: 1px solid #dce8f1;
        padding: 25px;
        text-align: center;
        -webkit-border-radius: 0 0 10px 10px;
        border-radius: 0 0 10px 10px;
      }
      /* FORM TYPOGRAPHY*/
      input[type=button], input[type=submit], input[type=reset]  {
        background-color: #56baed;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
      }
      input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
        background-color: #4CAF50;
      }
      input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
      }
      input[type=text] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
      }
      input[type=text]:focus {
        background-color: #fff;
        border-bottom: 2px solid #5fbae9;
      }
      input[type=text]:placeholder {
        color: #cccccc;
      }
/*password styles*/
input[type=password] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
input[type=password]:placeholder {
  color: #cccccc;
}

      /* ANIMATIONS */
      /* Simple CSS3 Fade-in-down Animation */
      .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
      }
      @-webkit-keyframes fadeInDown {
        0% {
          opacity: 0;
          -webkit-transform: translate3d(0, -100%, 0);
          transform: translate3d(0, -100%, 0);
        }
        100% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes fadeInDown {
        0% {
          opacity: 0;
          -webkit-transform: translate3d(0, -100%, 0);
          transform: translate3d(0, -100%, 0);
        }
        100% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      /* Simple CSS3 Fade-in Animation */
      @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
      @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
      @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
      .fadeIn {
        opacity:0;
        -webkit-animation:fadeIn ease-in 1;
        -moz-animation:fadeIn ease-in 1;
        animation:fadeIn ease-in 1;
        -webkit-animation-fill-mode:forwards;
        -moz-animation-fill-mode:forwards;
        animation-fill-mode:forwards;
        -webkit-animation-duration:1s;
        -moz-animation-duration:1s;
        animation-duration:1s;
      }
      .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
      }
      .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
      }
      .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
      }
      .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
      }
      /* Simple CSS3 Fade-in Animation */
      .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #56baed;
        content: "";
        transition: width 0.2s;
      }
      .underlineHover:hover {
        color: #0d0d0d;
      }
      .underlineHover:hover:after{
        width: 100%;
      }
.pass
{
  input: password;
}
      /* OTHERS */
      *:focus {
          outline: none;
      }
      #icon {
        width:60%;
      }
      * {
        box-sizing: border-box;
      }
      .banner {
    position: absolute;
    z-index: 9999;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    display: none;
}

.banner.active {
    display: block;
}

.banner-bottom {
    left: 0;
    right: 0;
    bottom: 10px;
}

.banner-top {
    left: 0;
    right: 0;
    top: 10px;
}

.banner-right {
    right: 10px;
    bottom: 10%;
    min-height: 10vh;
}

.banner-left {
    left: 10px;
    bottom: 10%;
    min-height: 10vh;
}

.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff;
}

.banner-close {
    position: absolute;
    right: 1.5%;
}

.banner-close:after {
    position: absolute;
    right: 0;
    top: 50%;
    content: 'X';
    color: #69f;
}
      </style>
</head>
  <body onload="resetSelection()">
  <center>
    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iVHdvdG9uZSIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDY0IDY0IiB3aWR0aD0iNTEycHgiPjxnIGlkPSJTdHJva2VfY29weV8zIiBkYXRhLW5hbWU9IlN0cm9rZSBjb3B5IDMiPjxwYXRoIGQ9Im0zMiA5di0yaC0ydjZoNHYtMmEyIDIgMCAwIDEgLTItMnoiIGZpbGw9IiNjZmYwOWUiLz48cGF0aCBkPSJtMjAgNDB2LTNoLTZ2MjRoMzZ2LTVoLTE0YTE2IDE2IDAgMCAxIC0xNi0xNnoiIGZpbGw9IiNjZmYwOWUiLz48cGF0aCBkPSJtNTAgNDdoOXYxNGgtOXoiIGZpbGw9IiNhOGRiYTgiLz48cGF0aCBkPSJtNSA0N2g5djE0aC05eiIgZmlsbD0iI2E4ZGJhOCIvPjxwYXRoIGQ9Im0xOSAzM2gyNnY0aC0yNnoiIGZpbGw9IiM3OWJkOWEiLz48cGF0aCBkPSJtMjUgMjJ2LTFoLTN2MTJoMjB2LTNoLTlhOCA4IDAgMCAxIC04LTh6IiBmaWxsPSIjY2ZmMDllIi8+PGcgZmlsbD0iIzc5YmQ5YSI+PHBhdGggZD0ibTMyIDExYTggOCAwIDAgMSA4IDh2MmEwIDAgMCAwIDEgMCAwaC0xNmEwIDAgMCAwIDEgMCAwdi0yYTggOCAwIDAgMSA4LTh6Ii8+PHBhdGggZD0ibTI2IDI1aDR2NGgtNHoiLz48cGF0aCBkPSJtMzQgMjVoNHY0aC00eiIvPjxwYXRoIGQ9Im0xOCA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im0yNiA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im0zNCA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im00MiA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im01MCA0M2gxMXY0aC0xMXoiLz48cGF0aCBkPSJtMyA0M2gxMXY0aC0xMXoiLz48L2c+PC9nPjxnIGlkPSJTdHJva2VfQ2xvc2VfY29weSIgZmlsbD0iIzNiODY4NiIgZGF0YS1uYW1lPSJTdHJva2UgQ2xvc2UgY29weSI+PHBhdGggZD0ibTMwIDI0aC00YTEgMSAwIDAgMCAtMSAxdjRhMSAxIDAgMCAwIDEgMWg0YTEgMSAwIDAgMCAxLTF2LTRhMSAxIDAgMCAwIC0xLTF6bS0xIDRoLTJ2LTJoMnoiLz48cGF0aCBkPSJtMzggMjRoLTRhMSAxIDAgMCAwIC0xIDF2NGExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtNGExIDEgMCAwIDAgLTEtMXptLTEgNGgtMnYtMmgyeiIvPjxwYXRoIGQ9Im0yMiA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im0zMCA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im0zOCA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im00NiA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im01NSA1OGExIDEgMCAwIDAgMS0xdi02YTEgMSAwIDAgMCAtMiAwdjZhMSAxIDAgMCAwIDEgMXoiLz48cGF0aCBkPSJtOSA1MGExIDEgMCAwIDAgLTEgMXY2YTEgMSAwIDAgMCAyIDB2LTZhMSAxIDAgMCAwIC0xLTF6Ii8+PHBhdGggZD0ibTYxIDQyaC0xMHYtNWExIDEgMCAwIDAgLTEtMWgtNHYtM2ExIDEgMCAwIDAgLTEtMWgtMnYtMTBoMWExIDEgMCAwIDAgMC0yaC0zdi0xYTkgOSAwIDAgMCAtNi04LjQ3di0zLjUzYTEgMSAwIDAgMCAtMS0xaC0xdi0zYTEgMSAwIDAgMCAtMiAwdjNoLTFhMSAxIDAgMCAwIC0xIDF2My41M2E5IDkgMCAwIDAgLTYgOC40N3YxaC0zYTEgMSAwIDAgMCAwIDJoMXYxMGgtMmExIDEgMCAwIDAgLTEgMXYzaC00YTEgMSAwIDAgMCAtMSAxdjVoLTEwYTEgMSAwIDAgMCAtMSAxdjRhMSAxIDAgMCAwIDEgMWgxdjEzYTEgMSAwIDAgMCAxIDFoNTRhMSAxIDAgMCAwIDEtMXYtMTNoMWExIDEgMCAwIDAgMS0xdi00YTEgMSAwIDAgMCAtMS0xem0tMzAtMzRoMnYyLjA2YTguMzYgOC4zNiAwIDAgMCAtMiAwem0tNiAxMWE3IDcgMCAwIDEgMTQgMHYxaC0xNHptLTIgM2gxOHYxMGgtMTh6bS0zIDEyaDI0djJoLTI0em0tMTYgMTBoOXYyaC05em0yIDRoN3YxMmgtN3ptOS0xMGgzNHYyMmgtMzR6bTQzIDIyaC03di0xMmg3em0yLTE0aC05di0yaDl6Ii8+PC9nPjwvc3ZnPgo=" height="120" width="120"/>
  </center>
  <center>
    <h1>
      <b>
      BUS REGISTRATION PORTAL
    </b>
    </h1>
  </center>
  <form method="POST">
    <br><br><br>
    <center>
      <div id="formContent">
        <br><br>
        <h4><b> Set your Username and Password </b></h4>
        <br><br>
        <!-- Login Form -->

          <input type="text" id="mobile" maxlength="10" onkeypress="inputNumber(event)" name="mobile" placeholder="Mobile Number" required="">
          <div id="mobileLoading"></div>
          <span id="mobileResult"></span>
          <input type="password" id="password" fromcontrolname="password" name="password" placeholder="Set password" class="pass" required="">
          <input type="password" id="password" name="repassword" placeholder="Re-enter password" required="">
          <input type="submit" method="POST" name="submit" value="Regsiter">


      </div>
    </center>
  </form>
            <center>
              <p class="msg-1 msg-2-bg">
              </p>
            </center>
          </div>
          <br>
          <br>
        <div class="col-xs-12 col-md-2 col-sm-2 col-lg-2"></div>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <div class="space-50"></div>
</div>



<?php
//validating UserName
if(isset($_POST['text']))
{
  $mobile = $_POST['mobile'];
  if($mobile == 'mobile')
  {
    $sql="SELECT mobile FROM `login` WHERE mobile ='$mobile'";
    $result=$mysqli->query($sql);
    if(mysqli_num_rows($result)>0)
    {
      echo "<script>alert('Username Exists!!');</script>";
    }
    else
    {
      $password=md5($password);
      $sql="INSERT INTO `login`(`mobile`, `password`) VALUES ('$mobile','$password')";
      echo $sql;
      $result=$mysqli->query($sql);
      if($result)
      {
        echo "<script>window.location = 'home.php';</script>";
      }
    }
  }
}


//validating credetials
if (isset($_POST['submit']))
{
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if($password != $repassword)
    {
        echo "<script>alert('Password Does Not Match!!')</script>";
    }
    else
    {
        $sqlreg="SELECT `mobile` FROM `registrations` WHERE `mobile`='$mobile'";
        $resultreg=$mysqli->query($sqlreg);
        if(mysqli_num_rows($resultreg)>0)
        {
          $sql="SELECT mobile FROM `login` WHERE mobile='$mobile'";
          $result=$mysqli->query($sql);
          if(mysqli_num_rows($result)>0)
          {
              echo "<script>alert('Mobile Number Exists!!');</script>";
          }
          else
          {
              $password=md5($password);
              $sql="INSERT INTO `login`(`mobile`, `password`) VALUES ('$mobile','$password')";
              echo $sql;
              $result=$mysqli->query($sql);
              if($result)
              {
                  echo "<script>window.location = 'home.php';</script>";
              }
          }
        }
        else
        {
            echo "<script>alert('Mobile Number dosen't Exist!!');</script>";
        }

    }

}


?>
<script type="text/javascript">
//phone inputNumber
function inputNumber(evt)
{
  var ch = String.fromCharCode(evt.which);
  if(!(/[0-9]/.test(ch)))
  {
    evt.preventDefault();
  }
  else if((document.getElementById("phone").length < 10) || (document.getElementById("phone").length > 10))
  {
    alert("Please Enter valid phone number");
  }

}
</script>

    </body>

</html>
