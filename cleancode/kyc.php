<?php include("config.php");include("header.php"); ?>

    <center>
      <div class="error"></div>
    </center>
    <form method="POST">
<center>
<div id="formContent">
        <br><br>
        <h2><b> KYC Form </b></h4>
        <br><br>
        <!-- Kyc Form -->
        
        <br>
        <input type="text"id="txtAadhar" onblur="AadharValidate();"  name="aadharNum" placeholder="Aadhar Number" required>
        <br>
        <input type="text" id="re-aadharNum" maxlength="12" name="reaadharNum" placeholder="Re-enter Aadhar Number" onkeypress="inputNumber(event)" required>
          <input type="date" id="dob" name="dob" placeholder="DD/MM/YYYY" required="">
          <br>
          <br>
          <input type="submit"  name="submit" value="Regsiter">

      </div>
</center>
  </form>
  <?php
    if(isset($_POST['submit']))
    {
      $aadhar=$_POST['aadhatNum'];
      $reaadhar=$_POST['reaadharNum'];
      if($aadhar!=$reaadhar)
        echo "<script>alert('Aadhar not matching !!');</script>";
      else
      {
        $user=$_SESSION['user'];
        $sql="UPDATE registrations set aadharno='$aadhar' where mobile='$user';INSERT INTO walletdetails (`mobile`,`money`) VALUES ('$user','0.000');";
        $result=$mysqli->multi_query($sql);
        if($result)
          echo "<script>alert('KYC completeted succesfully');window.location.href='home.php';</script>";
      }
    }
  ?>
  <script type="text/javascript">
    function AadharValidate() {
        var aadhar = document.getElementById("txtAadhar").value;
        var adharcardTwelveDigit = /^\d{12}$/;
        var adharSixteenDigit = /^\d{16}$/;
        if (aadhar != '') {
            if (aadhar.match(adharcardTwelveDigit)) {
                return true;
            }
            else if (aadhar.match(adharSixteenDigit)) {
                return true;
            }
            else {
                alert("Enter valid Aadhar Number");
                return false;
            }
        }
    }
  
</script>
</body>
</html>
