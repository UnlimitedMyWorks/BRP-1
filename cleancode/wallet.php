<?php include("config.php");include("header.php");?>
    <form method="POST">
      <center>
        <div id="formContent">
          <br><br>
          <h2><b> Wallet </b></h4>
            <span style="font-size: 80px" class="value">
            <strong>
              Rs
              <?php
                $user=$_SESSION['user'];
                $sql="SELECT * FROM walletdetails where mobile='$user'";
                $result=$mysqli->query($sql);
                //if(mysqli_num_rows($result)==1)
                //{
                  $row=$result->fetch_assoc();
                  echo $row['money'];
                //}
//                else
                // {
                //   echo "<script>alert('Complete Your KYC now to enable Wallet!!');window.location.href='kyc.php';</script>";
                // }
              ?>
            </strong>
          </span>
        <br><br>
        <input type="text" numbers-only="numbers-only" maxlength="6" id="addMoney" onkeypress="inputNumber(event)" placeholder="Enter Amount to be added " aria-invalid="false">
        <br>
        <br>
          <input type="submit" method="POST" name="submit" value="ADD MONEY">

      </div>
</center>
  </form>
  <?php
  if(isset($_POST["submit"]))
  {
    echo "<script>window.location = 'card_payment/cardpayment.php';</script>";
  }
  ?>
    <script>
    function inputNumber(evt)
    {
      var ch = String.fromCharCode(evt.which);
      if(!(/[0-9.]/.test(ch)))
      {
        evt.preventDefault();
      }

    }
    </script>
</body>
</html>
