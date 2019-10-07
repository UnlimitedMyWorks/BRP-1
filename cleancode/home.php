<?php include("config.php");include("header.php"); ?>


    <form method="POST">
<center>
<div id="formContent">
        <br><br>
        <h2><b> Book Tickets </b></h4>
        <br><br>
        <!-- Login Form -->
        <select id="busNo" size="1" onchange="makeSubmenu(this.value)" class="select" name="busNo" required onclick="filterBus()" required="">
                      <option value="" disabled="" selected="">Which Bus?</option>
                      <option value="NGOsColony"> 1V - NGOs Colony Bus Stop </option>
                      <option value="ySecunderabad"> 1Y - Secunderabad Junction </option>
                      <option value="KotiBusStop"> 1K/25 - Koti Bus Stop </option>
                      <option value="Ziaguda"> 1J - Ziaguda </option>
                      <option value="Kbs"> 1P/25I - Koti Bus Stop </option>
                      <option value="Falaknuma"> 1F/38S - Falaknuma </option>
                      <option value="Secunderabad"> 2 - Secunderabad Junction </option>
                      <option value="SuperBazar"> Super Bazar </option>
                      <option value="NalgondaXRoads"> Nalgonda X Roads </option>
                      <option value="Malakpet"> Malakpet </option>
                      <option value="Chaderghat"> Chaderghat </option>
                      <option value="Womenscollege"> Womens college </option>
                      <option value="Koti"> Koti Bus Stop </option>
                      <option value="RamKoti"> Ram Koti </option>
                      <option value="Badichowdi"> Badichowdi </option>
                      <option value="MadapatiHanumanthaSchool"> Madapati Hanumantha School </option>
                      <option value="Ymca"> YMCA(Koti) Bus Stop </option>
                      <option value="Narayanguda"> Narayanguda </option>
                      <option value="Chikkadpally"> Chikkadpally </option>
                      <option value="RTC"> RTC Cross Rd </option>
                      <option value="GolcondaXRoads"> Golconda X Roads </option>
                      <option value="SapthagiriTheater"> Sapthagiri Theater </option>
                      <option value="RajaDelux"> Raja Delux </option>
                      <option value="MusheerabadBusStop"> Musheerabad Bus Stop </option>
                      <option value="JailGarden"> Jail Garden </option>
                      <option value="GandhiHospital"> Gandhi Hospital </option>
                      <option value="PadmaraoNagar"> Padmarao Nagar </option>
                      <option value="Bhoiguda"> Bhoiguda </option>
                      </select>
                      <br>
                      <select id="from" size="1" class="select" name="from" required="">
                      <option value="" disabled="" selected="">From</option>
                      </select>
                      <br>
                      <select id="to" size="1" class="select" name="to" required="">
                      <option value="" disabled="" selected="">To</option>
                      </select>
                      <br>
          <input type="date" id="doj" name="doj" min= <?php echo date('Y-m-d'); ?> placeholder="DD/MM/YYYY" required="">
          <br>
          <br>
          <input type="submit" method="POST" name="submit" value="Regsiter">

      </div>
</center>
  </form>
  <?php
  if(isset($_POST["submit"]))
  {
    $user=$_SESSION['user'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date=$_POST['doj'];
    if($from == $to)
    {
        echo "<script>alert('from and destination cannot be same!!!')</script>";
    }
    else
    {
      $sql="SELECT COUNT(ticket_id) from ticket_bookings";
      $result=$mysqli->query($sql);
      $count=mysqli_num_rows($result);
      $ticketid=md5(sha1(time()+$count));
      $sql="INSERT INTO `ticket_bookings`(`mobile`, `ticket_id`, `fromDestination`, `toDestination`,`date`, `status`) VALUES ('$user','$ticketid','$from','$to','$doj','TNO')";
      echo $sql;
      $result=$mysqli->query($sql);
      if($result)
        echo "<script>window.location.href = 'myBookings.php'</script>";
      else
      echo "<script>alert('ticket not booked !!')</script>";
    }
  }
?>
    <script type="text/javascript">
      var placesByBus = {
        NGOsColony: ["Select Place","NGOs Colony Bus Stop","Panama Godown","LB Nagar Bus Stop","	Kothapet Bus Stop","Chaitanyapuri","Dilsukhnagar Bus station","Mosarambagh","Super Bazar","Nalgonda X Roads Bus Stop","Malakpet","Chaderghat Bus Stop","Womens college Bus Stop","Koti Bus Stop","Ram Koti","Badichowdi","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","	Musheerabad Bus Stop"
        ,"Jail Garden","	Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction"],
        ySecunderabad: ["Select Place","Secunderabad Junction","Bhoiguda","Padmarao Nagar","Gandhi Hospital","Jail Garden","Musheerabad Bus Stop","Raja Delux","Sapthagiri Theater","Golconda X Roads","RTC Cross Rd","Chikkadpally","Narayanguda","YMCA(Koti) Bus Stop","Madapati Hanumantha School","Badichowdi","Ram Koti","Koti Bus Stop","Putlibowli","CBS Bus Stop","Gowliguda","Afzalgunj Bus Stop","Osmania Hospital(OGH)",
        "Madina Market","City College","East Bahadurpura","Zoo Park"],
        KotiBusStop: ["Select Place","Koti Bus Stop","Ram Koti","Badichowdi","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","Musheerabad Bus Stop","Jail Garden","Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction"],
        Ziaguda: ["Select Place","Ziaguda","Osmania Hospital(OGH)","Afzalgunj Bus Stop","Gowliguda","CBS Bus Stop","Putlibowli","Koti Bus Stop","Ram Koti","Badichowdi","Kachiguda Bus Stop","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","Musheerabad Bus Stop","Jail Garden","Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction"],
        KotiBusStop: ["Select Place","Koti Bus Stop","Ram Koti","Badichowdi","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","Musheerabad Bus Stop","Jail Garden","Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction","patny","JBS Bus Stop","Kharkhana Bus Stop","Hanuman Temple(Tirumulgherry)","Tirumalgherry","Lal Bazar Bus Stop","Lothkunta Bus Stop",
        "Alwal Bus Station","Alwal Police Station","Temple Alwal","Old Alwal(IG Statue) Bus Stop"],
        Kbs: ["Select Place","Koti Bus Stop","Ram Koti","Badichowdi","Madapati Hanumantha School","YMCA(Koti) Bus Stop","Narayanguda","Chikkadpally","RTC Cross Rd","Golconda X Roads","Sapthagiri Theater","Raja Delux","Musheerabad Bus Stop","Jail Garden","Gandhi Hospital","Padmarao Nagar","Bhoiguda","Secunderabad Junction","Clock Tower","patny","JBS Bus Stop","Kharkhana Bus Stop","Tirumalgherry","Hanuman Temple(Tirumulgherry)","Lal Bazar Bus Stop",
        "Lothkunta Bus Stop","Alwal Bus Station","Alwal Police Station","Temple Alwal","Old Alwal(IG Statue) Bus Stop"],
        Falaknuma: ["Select Place",],
        Secunderabad: ["Select Place",],
        SuperBazar: ["Select Place",],
        NalgondaXRoads: ["Select Place",],
        Malakpet: ["Select Place",],
        Chaderghat: ["Select Place",],
        Womenscollege: ["Select Place",],
        Koti: ["Select Place",],
        RamKoti: ["Select Place",],
        Badichowdi: ["Select Place",],
        MadapatiHanumanthaSchool: [],
        Ymca: [],
        Narayanguda: [],
        Chikkadpally: [],
        Rtc: [],
        GolcondaXRoads: [],
        SapthagiriTheater: [],
        RajaDelux: [],
        MusheerabadBusStop: [],
        JailGarden: [],
        GandhiHospital: [],
        PadmaraoNagar: [],
        Bhoiguda: []
      }
      function makeSubmenu(value)
      {
        if(value.length==0)
        {
          document.getElementById("from").innerHTML = "<option></option>";
          document.getElementById("to").innerHTML = "<option></option>";
        }
        else
        {
          var busOptions = "";
          for(busNum in placesByBus[value])
          {
            busOptions+="<option>"+placesByBus[value][busNum]+"</option>";
          }
          document.getElementById("from").innerHTML = busOptions;
          document.getElementById("to").innerHTML = busOptions;
        }
      }
      function displaySelected()
      {
        var busNo = document.getElementById("busNo").value;
        var from = document.getElementById("from").value;
        alert(busNo+"\n"+from);
      }
      function resetSelection()
      {
        document.getElementById("busNo").selectedIndex = 0;
        document.getElementById("from").selectedIndex = 0;
      }
    </script>
</body>
</html>
