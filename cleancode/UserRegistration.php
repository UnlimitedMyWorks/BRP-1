<?php include("config.php");?>
<html lang="en">
<head>
<!-- Character set configuration -->
<meta charset="UTF-8">
<title>Registration Details</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Viewport configuration, scaling options -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/registration-frm-1.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Font Awesome icon -->
<link href="css/font-awesome.min.css" rel="stylesheet">
      <style>
      body
      {
        font-family: Arial, Helvetica, sans-serif;
        /* background-image: url("image/bg.png"); */
      }
      .tc
      {
        margin-left: auto !important;
        margin-right: auto !important;
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
        /* -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4); */
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.1s ease-in-out;
        -moz-transition: all 0.1s ease-in-out;
        -ms-transition: all 0.1s ease-in-out;
        -o-transition: all 0.1s ease-in-out;
        transition: all 0.1s ease-in-out;
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
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
      }
      input[type=number] {
        -moz-appearance: textfield;
      }
      </style>
</head>
<body>
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
  <br>
  <br>
  <!-- This is unqiue ID Begin -->
<div id="lsf">
  <!-- Signup Begin -->
  <div class="clearfix"></div>
  <!-- Container Begin-->
  <div class="container">
    <div>
      <div class="row"> <br>
        <br>
        <div class="col-xs-12 col-md-2 col-sm-2 col-lg-2"></div>
        <div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
            <div class="signup-box">
              <h3 class="title mar text-center">
              <strong>
                Fill out the form to register
                </strong>
              </h3>
              <form method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group common-ico">
                      <label>First Name</label>
                      <input type="text" maxlength="20" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group common-ico">
                      <label>Last Name</label>
                      <input type="text" maxlength="20" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                  </div>
                </div>
                <div class="form-group common-ico">
                  <label> Email </label>
                  <input id="email" maxlength="40" type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                <div class="form-group common-ico">
                  <label>Address</label>
                  <input maxlength="150" type="text" name="address" class="form-control" placeholder="Address" required>
                  </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group common-ico">
                      <label>State or Territory</label>

                      <select id="state" size="1" onchange="makeSubmenu(this.value)" class="form-control pad-left" name="state" required onclick="filterCity()">
                      <option value="" disabled="" selected="">Choose State</option>
                      <option value="AndamanandNicobarIslands"> Andaman and Nicobar Islands </option>
                      <option value="AndhraPradesh"> Andhra Pradesh </option>
                      <option value="ArunachalPradesh"> Arunachal Pradesh </option>
                      <option value="Assam"> Assam </option>
                      <option value="Bihar"> Bihar </option>
                      <option value="Chandigarh"> Chandigarh </option>
                      <option value="Chhattisgarh"> Chhattisgarh </option>
                      <option value="DadraandNagarHaveli"> Dadra and Nagar Haveli </option>
                      <option value="Daman and Diu"> Daman and Diu </option>
                      <option value="Delhi"> Delhi </option>
                      <option value="Goa"> Goa </option>
                      <option value="Gujarat"> Gujarat </option>
                      <option value="Haryana"> Haryana </option>
                      <option value="HimachalPradesh"> Himachal Pradesh </option>
                      <option value="JammuandKashmir"> Jammu and Kashmir </option>
                      <option value="Jharkhand"> Jharkhand </option>
                      <option value="Karnataka"> Karnataka </option>
                      <option value="Kerala"> Kerala </option>
                      <option value="Lakshadweep"> Lakshadweep </option>
                      <option value="MadhyaPradesh"> Madhya Pradesh </option>
                      <option value="Maharastra"> Maharastra </option>
                      <option value="Manipur"> Manipur </option>
                      <option value="Meghalaya"> Meghalaya </option>
                      <option value="Mizoram"> Mizoram </option>
                      <option value="Nagaland"> Nagaland </option>
                      <option value="Odisha"> Odisha </option>
                      <option value="Puducherry"> Puducherry </option>
                      <option value="Punjab"> Punjab </option>
                      <option value="Rajasthan"> Rajasthan </option>
                      <option value="Sikkim"> Sikkim </option>
                      <option value="Tamil Nadu"> Tamil Nadu </option>
                      <option value="Telangana"> Telangana </option>
                      <option value="Tripura"> Tripura </option>
                      <option value="UttarPradesh"> Uttar Pradesh </option>
                      <option value="Uttarakhand"> Uttarakhand </option>
                      <option value="WestBengal"> West Bengal </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group common-ico">
                      <label>City</label>
                      <select id="citySelect" size="1" class="form-control pad-left" name="city" required>
                      <option value="" disabled="" selected="">Choose City</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group common-ico">
                      <label>
                        Mobile
                        </label>
                        <input id="phone" type="text" maxlength="10" name="mobile" onclick="inputNumber(event)" class="form-control" placeholder="Mobile" required >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group common-ico">
                      <label>
                        Date of birth
                      </label>
                      <input id="dob" type="date" name="dob" class="form-control" placeholder="DD/MM/YYYY" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group common-ico">
                      <label>Zipcode</label>
                      <input id="zipcode" maxlength="6" type="text" name="zipcode" class="form-control" placeholder="Zipcode" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group common-ico">
                      <label>Aadhar Number</label>
                      <input id="aadharNum" maxlength="12" type="text" name="aadharNum" class="form-control" placeholder="Aadhar Number" required>
                    </div>
                  </div>
                </div>
                <div class="form-group sm-mar">
                  <label>Gender &nbsp;</label>
                  <label class="radio-inline">
                  <input id="gender" type="radio" name="gender" value="Male">
                  Male </label>
                  <label class="radio-inline">
                  <input type="radio" id="gender" name="gender" value="Female">
                  Female </label>
                  <label class="radio-inline">
                  <input type="radio" name="gender" id="gender" value="other">
                  Other </label>
                </div>
                <label class="control tc control--checkbox">
                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
                <input type="checkbox" checked="checked">
                <div class="control__indicator"></div>
                </label>
                <br><br>
                <br>
                <br>
                <center>
                  <input type="submit" method="POST" onclick="return phonenumber()" style="justify-content: center;" name="submit" class="button" value="Regsiter Now">
                </center>
              </form>
              <center><p class="msg-1 msg-2-bg"></p></center>
            </div>
            <br>
            <br>
            <br>
            <br>
          </div>
        <div class="col-xs-12 col-md-2 col-sm-2 col-lg-2"></div>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <div class="space-50"></div>
</div>
<?php
  if(isset($_POST["submit"]))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $zipcode = $_POST['zipcode'];
    $gender = $_POST['gender'];
    $aadharNum = $_POST['aadharNum'];
    // if($mobile != 10)
    // {
    //   echo "<script>alert('enter valid phone number')</script>";
    // }
    // else
    // {
      $sql="INSERT INTO `registrations`(`fname`, `lname`, `email`, `address`, `state`, `city`, `mobile`, `DOB`, `zipcode`, `gender`)
            VALUES ('$fname','$lname','$email','$address','$state','$city','$mobile','$dob','$zipcode','$gender');
            SELECT * FROM `db` WHERE aadharNum='$aadharNum' dob='$dob'";
      $result=$mysqli->query($sql);
      echo $sql;
      if($result)
      echo "<script>window.location = 'loggedin.php';</script>";
    // }
  }
?>
<!-- jQuery JavaScript plugins -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- Bootstrap JavaScript plugins -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- BootstrapValidator JS -->
<script src="js/bootstrapValidator.min.js"></script>
<script src="js/validation-functions.js"></script>
<script type="text/javascript">
var citiesByState = {
  AndamanandNicobarIslands: ["Select City","Port Blair"],
  AndhraPradesh: ["Select City","Visākhapatnam","Vijayawāda","Guntūr","Nellore","Kurnool","Rājahmundry","Tirupati","Kākināda","Kadapa","Anantapur"],
  ArunachalPradesh: ["Select City","Tawang","Aalo","Anini","Bomdila","Bhalukpong","Basar","Bordumsa","Changlang","Chowkham","Deomali","Daporijo","Dambuk","Hawai","Khonsa","Lumla","Itanagar","Namsai","Naharlagun","Jairampur","Pasighat","Roing","Nyapin",
                     "Yupia","Seepa","Tuting","Ziro","Tezu"],
  Assam: ["Select City","Guwahati","Silchar","Dibrugarh","	Jorhat","Nagaon"],
  Bihar: ["Select City","Patna","Gaya","Bhagalpur","Muzaffarpur","Purnia"],
  Chandigarh: ["Select City"],
  Chhattisgarh: ["Select City"],
  DadraandNagarHaveli: ["Select City"],
  DamanandDiu: ["Select City"],
  Delhi: ["Select City","Delhi"],
  Goa: ["Select City","Margao","Panaji"],
  Gujarat: ["Select City"],
  Haryana: ["Select City","Faridabad","Gurgaon","Panipat","Yamunanagar","Rohtak"],
  HimachalPradesh: ["Select City"],
  JammuandKashmir: ["Select City"],
  Jharkhand: ["Select City"],
  Karnataka: ["Select City","Mangaluru","Bengaluru","Mysuru","Hubballi"],
  Kerala: ["Select City","kochi","Kanpur","thiruvananthapuram",],
  Lakshadweep: ["Select City"],
  MadhyaPradesh: ["Select City"],
  Maharastra: ["Select City","Mumbai","Pune","Nagpur","Latur"],
  Manipur: ["Select City"],
  Meghalaya: ["Select City"],
  Mizoram: ["Select City"],
  Nagaland: ["Select City"],
  Odisha: ["Select City","Bhubaneswar","Puri","Cuttack","Brahmapur"],
  Puducherry: ["Select City","Puducherry"],
  Punjab: ["Select City","Ludhiana","Amritsar","Jalandhar","Patiala","Bathinda"],
  Rajasthan: ["Select City"],
  TamilNadu: ["Select City","Chennai","Madurai","Coimbatore","Puducherry",""],
  Telangana: ["Select City","Hyderabad","Warangal","Nizamabad"],
  Tripura: ["Select City"],
  UttarPradesh: ["Select City"],
  Uttarakhand: ["Select City"],
  Sikkim: ["Select City"],
  WestBengal: ["Select City"]
}
function validategmail()
{
  if(document.getElementById("emailId").value.indexOf("@gmail.com") == -1)
  {
    alert("Please Enter G-mail address");
  }
}
function makeSubmenu(value)
{
  if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
  else
  {
    var citiesOptions = "";
    for(cityId in citiesByState[value])
    {
      citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
    }
    document.getElementById("citySelect").innerHTML = citiesOptions;
  }
}
function redirectto()
{
    window.location = "loggedin.php";
}
function displaySelected()
{
   var country = document.getElementById("state").value;
   var city = document.getElementById("citySelect").value;
   alert(country+"\n"+city);
}
function resetSelection()
{
  document.getElementById("state").selectedIndex = 0;
  document.getElementById("citySelect").selectedIndex = 0;
}
function inputNumber(evt)
{
  var ch = String.fromCharCode(evt.which);
  if(!(/[0-9]/.test(ch)))
  {
    evt.preventDefault();
  }
}
function phonenumber()
{
var inputtxt = document.getElementById("phone").value;
  var phoneno = /^\d{10}$/;
  if(inputtxt.match(phoneno) && inputtxt.length == 10)
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
  }
  }
</script>
</body>
</html>
