<?php 
  include("config.php");
  session_start();
  if(isset($_SESSION['user']))
  {
        header("Location:home.php");
  }
  if(isset($_POST["submit"]))
  {
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql="SELECT * FROM `login` WHERE mobile='$mobile' and pass='$password'";
    $result=$mysqli->query($sql);
    $count=mysqli_num_rows($result);
    $row=$result->fetch_assoc();

    // If result matched $username and $password, table row must be 1 row
    if ($count==1)
    {
      $_SESSION["user"] = $row['mobile'];
      header("Location:home.php");
    } 
    else 
    {
        echo "<script>alert('Unmatched Mobile Number and Password');</script>";
    }
  }
?>
<html>
<head>
  <title>
    Registration Portal
  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body
{
  font-family: Arial, Helvetica, sans-serif;
}

/* Full-width input fields */
input[type=text], input[type=password]
{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid #ccc;
  background: none;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button
{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover
{
  opacity: 0.8;
}

.signupbtn
{
  float: right;
  width: auto;
}


.loginbtn
{
  background-color: #56baed;
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.0s ease-in-out;
        -moz-transition: all 0.0s ease-in-out;
        -ms-transition: all 0.0s ease-in-out;
        -o-transition: all 0.0s ease-in-out;
        transition: all 0.0s ease-in-out;
padding: 14px 20px;
border: 0px 8px;
width: auto;
}
.loginbtn:hover  {
        background-color: #4CAF50;
      }
      .loginbtn:active{
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
      }

/* Extra styles for the cancel button */
.cancelbtn
{
  background-color: #56baed;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.0s ease-in-out;
        -moz-transition: all 0.0s ease-in-out;
        -ms-transition: all 0.0s ease-in-out;
        -o-transition: all 0.0s ease-in-out;
        transition: all 0.0s ease-in-out;
  width: auto;
  padding: 14px 20px;
  background-color: #4CAF50;
}
.cancelbtn:hover  {
        background-color: #f44336;
      }
      .cancelbtn:active{
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
      }

/* Center the image and position the close button */
.imgcontainer
{
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar
{
  width: 40%;
  border-radius: 50%;
}

.container
{
  padding: 16px;
}

span.psw
{
  float: right;
  padding-top: 16px;
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

/* The Modal (background) */
.modal
{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content
{
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close
{
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus
{
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate
{
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  <center>
    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iVHdvdG9uZSIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDY0IDY0IiB3aWR0aD0iNTEycHgiPjxnIGlkPSJTdHJva2VfY29weV8zIiBkYXRhLW5hbWU9IlN0cm9rZSBjb3B5IDMiPjxwYXRoIGQ9Im0zMiA5di0yaC0ydjZoNHYtMmEyIDIgMCAwIDEgLTItMnoiIGZpbGw9IiNjZmYwOWUiLz48cGF0aCBkPSJtMjAgNDB2LTNoLTZ2MjRoMzZ2LTVoLTE0YTE2IDE2IDAgMCAxIC0xNi0xNnoiIGZpbGw9IiNjZmYwOWUiLz48cGF0aCBkPSJtNTAgNDdoOXYxNGgtOXoiIGZpbGw9IiNhOGRiYTgiLz48cGF0aCBkPSJtNSA0N2g5djE0aC05eiIgZmlsbD0iI2E4ZGJhOCIvPjxwYXRoIGQ9Im0xOSAzM2gyNnY0aC0yNnoiIGZpbGw9IiM3OWJkOWEiLz48cGF0aCBkPSJtMjUgMjJ2LTFoLTN2MTJoMjB2LTNoLTlhOCA4IDAgMCAxIC04LTh6IiBmaWxsPSIjY2ZmMDllIi8+PGcgZmlsbD0iIzc5YmQ5YSI+PHBhdGggZD0ibTMyIDExYTggOCAwIDAgMSA4IDh2MmEwIDAgMCAwIDEgMCAwaC0xNmEwIDAgMCAwIDEgMCAwdi0yYTggOCAwIDAgMSA4LTh6Ii8+PHBhdGggZD0ibTI2IDI1aDR2NGgtNHoiLz48cGF0aCBkPSJtMzQgMjVoNHY0aC00eiIvPjxwYXRoIGQ9Im0xOCA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im0yNiA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im0zNCA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im00MiA0MWg0djE2aC00eiIvPjxwYXRoIGQ9Im01MCA0M2gxMXY0aC0xMXoiLz48cGF0aCBkPSJtMyA0M2gxMXY0aC0xMXoiLz48L2c+PC9nPjxnIGlkPSJTdHJva2VfQ2xvc2VfY29weSIgZmlsbD0iIzNiODY4NiIgZGF0YS1uYW1lPSJTdHJva2UgQ2xvc2UgY29weSI+PHBhdGggZD0ibTMwIDI0aC00YTEgMSAwIDAgMCAtMSAxdjRhMSAxIDAgMCAwIDEgMWg0YTEgMSAwIDAgMCAxLTF2LTRhMSAxIDAgMCAwIC0xLTF6bS0xIDRoLTJ2LTJoMnoiLz48cGF0aCBkPSJtMzggMjRoLTRhMSAxIDAgMCAwIC0xIDF2NGExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtNGExIDEgMCAwIDAgLTEtMXptLTEgNGgtMnYtMmgyeiIvPjxwYXRoIGQ9Im0yMiA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im0zMCA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im0zOCA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im00NiA0MGgtNGExIDEgMCAwIDAgLTEgMXYxNmExIDEgMCAwIDAgMSAxaDRhMSAxIDAgMCAwIDEtMXYtMTZhMSAxIDAgMCAwIC0xLTF6bS0xIDE2aC0ydi0xNGgyeiIvPjxwYXRoIGQ9Im01NSA1OGExIDEgMCAwIDAgMS0xdi02YTEgMSAwIDAgMCAtMiAwdjZhMSAxIDAgMCAwIDEgMXoiLz48cGF0aCBkPSJtOSA1MGExIDEgMCAwIDAgLTEgMXY2YTEgMSAwIDAgMCAyIDB2LTZhMSAxIDAgMCAwIC0xLTF6Ii8+PHBhdGggZD0ibTYxIDQyaC0xMHYtNWExIDEgMCAwIDAgLTEtMWgtNHYtM2ExIDEgMCAwIDAgLTEtMWgtMnYtMTBoMWExIDEgMCAwIDAgMC0yaC0zdi0xYTkgOSAwIDAgMCAtNi04LjQ3di0zLjUzYTEgMSAwIDAgMCAtMS0xaC0xdi0zYTEgMSAwIDAgMCAtMiAwdjNoLTFhMSAxIDAgMCAwIC0xIDF2My41M2E5IDkgMCAwIDAgLTYgOC40N3YxaC0zYTEgMSAwIDAgMCAwIDJoMXYxMGgtMmExIDEgMCAwIDAgLTEgMXYzaC00YTEgMSAwIDAgMCAtMSAxdjVoLTEwYTEgMSAwIDAgMCAtMSAxdjRhMSAxIDAgMCAwIDEgMWgxdjEzYTEgMSAwIDAgMCAxIDFoNTRhMSAxIDAgMCAwIDEtMXYtMTNoMWExIDEgMCAwIDAgMS0xdi00YTEgMSAwIDAgMCAtMS0xem0tMzAtMzRoMnYyLjA2YTguMzYgOC4zNiAwIDAgMCAtMiAwem0tNiAxMWE3IDcgMCAwIDEgMTQgMHYxaC0xNHptLTIgM2gxOHYxMGgtMTh6bS0zIDEyaDI0djJoLTI0em0tMTYgMTBoOXYyaC05em0yIDRoN3YxMmgtN3ptOS0xMGgzNHYyMmgtMzR6bTQzIDIyaC03di0xMmg3em0yLTE0aC05di0yaDl6Ii8+PC9nPjwvc3ZnPgo=" height="120" width="120"/>
  </center>
	<center>
		<h1>
			BUS REGISTRATION PORTAL
		</h1>


<input type="submit"  name="submit" value="LOGIN" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
<input type="submit" onclick="redirectto()" style="width:auto" value="SIGNUP">
</center>
<div id="id01" class="modal">

  <form class="modal-content animate" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMTguOTY1IDMxOC45NjUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxOC45NjUgMzE4Ljk2NTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxnPgoJPGc+CgkJPHBhdGggc3R5bGU9ImZpbGw6IzYzNjM1ODsiIGQ9Ik0zMDMuNjczLDI1My41MThjLTExLjE1MS0zNy43NTQtNjcuMTIxLTMzLjU2Ni05MS4yNzktNDQuNDA4ICAgIGMtMjQuMTU3LTEwLjg0Mi0yMC4zODYtNDcuMjE5LTIzLjQ0OS01My41NDhoLTU4LjkzMmMtMy4wNTgsNi4zMjksMC43MTQsNDIuNzExLTIzLjQ0OSw1My41NDggICAgYy0yNC4xNTcsMTAuODQyLTgwLjEzMyw2LjY1NS05MS4yNzksNDQuNDA4Yy02LjE0OSwyMC44MjQtNS44NTcsMjcuMTkzLTcuNTU0LDUwLjI2YzAsMCw3Ni44LDE1LjE4NywxNTAuMDE0LDE1LjE4NyAgICBzMTUzLjQ4OC0xNS4xODcsMTUzLjQ4OC0xNS4xODdDMzA5LjUzLDI4MC43MDUsMzA5LjgyMiwyNzQuMzQyLDMwMy42NzMsMjUzLjUxOHoiLz4KCQk8cGF0aCBzdHlsZT0iZmlsbDojNTE1MTQ3OyIgZD0iTTMwMy42NzMsMjUzLjUxOGMtMTEuMTUxLTM3Ljc1NC02Ny4xMjEtMzMuNTY2LTkxLjI3OS00NC40MDggICAgYy0yNC4xNTctMTAuODQyLTIwLjM4Ni00Ny4yMTktMjMuNDQ5LTUzLjU0OEgxNTcuNzRjMCwwLTAuNzE5LDUxLjAyNCwyMy40MzgsNjEuODY2czgwLjEzMyw2LjY1NSw5MS4yNzksNDQuNDA4ICAgIGM1Ljg1NywxOS44Myw1Ljg2OCwyNi41NTIsNy4zMjQsNDcuMDczYzE5LjIzNC0yLjgxNiwzMS40NDItNS4xMjYsMzEuNDQyLTUuMTI2QzMwOS41MywyODAuNzA1LDMwOS44MjIsMjc0LjM0MiwzMDMuNjczLDI1My41MTh6ICAgICIvPgoJCTxnPgoJCQk8cGF0aCBzdHlsZT0iZmlsbDojRUFFQUUxOyIgZD0iTTE3NC43NDgsMzE4LjdjMTAuMzQ4LTI2LjY3LDI0LjE2My03My45NSwyNi4zNjYtMTE5LjQ2NmgtODMuNDI3ICAgICBjMi4yMDMsNDUuNTcyLDE2LjA1OCw5Mi45MDksMjYuNDIzLDExOS41NjJjNC41NDEsMC4xMTIsOS4wOTQsMC4xNjksMTMuNjM2LDAuMTY5ICAgICBDMTYzLjM4MywzMTguOTY0LDE2OS4wNjUsMzE4Ljg2MywxNzQuNzQ4LDMxOC43eiIvPgoJCQk8Zz4KCQkJCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiNDNkM1QUY7IiBwb2ludHM9IjE5Ni45MSwyMTYuMjI1IDE3Ni4xMDgsMjM2LjEyMiAxNzEuMTksMjA1Ljc0MyAgICAgIi8+CgkJCQk8cG9seWdvbiBzdHlsZT0iZmlsbDojQzZDNUFGOyIgcG9pbnRzPSIxMjEuMDA5LDIxNi4yMjUgMTQyLjgxNywyMzYuMTIyIDE0Ni43OTYsMjA1LjUxOCAgICAgIi8+CgkJCQk8cG9seWdvbiBzdHlsZT0iZmlsbDojQzZDNUFGOyIgcG9pbnRzPSIxNzIuMDA1LDIwNS41MTggMTQ2Ljc5NiwyMDUuNTE4IDE0NC44ODUsMjExLjcgMTczLjk2MSwyMTEuODY5ICAgICAiLz4KCQkJCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiNBQUE4OEY7IiBwb2ludHM9IjE0Ni43OTYsMjA1LjUxOCAxNDQuODg1LDIxMS43IDE0NS45ODcsMjEyLjQyICAgICAiLz4KCQkJCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiNBQUE4OEY7IiBwb2ludHM9IjE3My45NjEsMjExLjg2OSAxNzEuMTksMjA1Ljc0MyAxNzIuMzMxLDIxMi44MDIgICAgICIvPgoJCQkJPHBhdGggc3R5bGU9ImZpbGw6IzRDNEM0QzsiIGQ9Ik0xNzMuNDMzLDMxOC43MzlsMC41NzktNy45ODdsLTYuMDgxLTgwLjUxaC0xNi4wMjRsLTcuMDk5LDgwLjUxNWwwLjU4NSw4LjA2NiAgICAgIGM0LjEyLDAuMDg0LDguMjQsMC4xNDEsMTIuMzU0LDAuMTQxQzE2Mi45NSwzMTguOTY0LDE2OC4xODgsMzE4Ljg4LDE3My40MzMsMzE4LjczOXoiLz4KCQkJCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiMzQTNBMzg7IiBwb2ludHM9IjE1MS45NjcsMjMwLjU5NyAxNjcuOTMsMjMwLjIzNyAxNjguMjU2LDIzNC43MzQgICAgICIvPgoJCQkJPHBvbHlnb24gc3R5bGU9ImZpbGw6IzRDNEM0QzsiIHBvaW50cz0iMTQwLjU0MSwyMDguMTgyIDE3OC4yNTUsMjA4LjE1OSAxNzYuMTA4LDIyMS4wMzEgMTY3LjU5MywyMzAuNTk3IDE1MS45NjcsMjMwLjU5NyAgICAgICAxNDIuNjkzLDIyMS4wMzEgICAgICIvPgoJCQkJPHBhdGggc3R5bGU9ImZpbGw6I0VBRUFFMTsiIGQ9Ik0xNDYuNzk2LDIwNS41MThsLTI1LjcyLTEzLjk4NGMwLDAtMy4zODksNC44MTctMTEuODQzLDE2LjIxbDMxLjcyMywyMi44NTNsMi43MDQtMTQuOTIzICAgICAgTDE0Ni43OTYsMjA1LjUxOHoiLz4KCQkJCTxwYXRoIHN0eWxlPSJmaWxsOiNFQUVBRTE7IiBkPSJNMTcxLjEyMiwyMDUuNTE4bDI1LjcyLTEzLjk4NGMwLDAsMy4zODksNC44MTcsMTEuODQzLDE2LjIxbC0zMS43MjMsMjIuODUzbC0yLjcwNC0xNC45MjMgICAgICBMMTcxLjEyMiwyMDUuNTE4eiIvPgoJCQkJPHBhdGggc3R5bGU9ImZpbGw6I0UwREJEMzsiIGQ9Ik0xOTYuODQyLDE5MS41MzRsLTI1LjcyLDEzLjk4NGwxLjc3Niw1Ljc3MmMyLjM3MiwyLjYwMiw1LjEwOSw0LjcxNiw4LjI3OSw2LjEzOCAgICAgIGMyLjc5OSwxLjI1Myw2LjAyLDIuMzEsOS41NDksMy4yNDlsMTcuOTQ3LTEyLjkyN0MyMDAuMjMyLDE5Ni4zNTEsMTk2Ljg0MiwxOTEuNTM0LDE5Ni44NDIsMTkxLjUzNHoiLz4KCQkJPC9nPgoJCQk8Zz4KCQkJCTxwYXRoIHN0eWxlPSJmaWxsOiM1MTUxNDc7IiBkPSJNMjMzLjI5MiwyNTAuNzNsLTE1LjMzMy01LjU1OWwxMy43NzYtMy43OTRsLTEzLjEzLTI5Ljk2OWwtNDAuNzQ5LDEwNy4yMDggICAgICBjNC43NzgtMC4xNjMsOS41NDktMC4zNzcsMTQuMjkzLTAuNjM1TDIzMy4yOTIsMjUwLjczeiIvPgoJCQkJPHBhdGggc3R5bGU9ImZpbGw6IzUxNTE0NzsiIGQ9Ik04Ni4xODksMjQxLjM3MmwxMy43NzYsMy43OTRsLTE1LjMzMyw1LjU1OWw0MS4yMTYsNjcuMzY5YzQuNzE2LDAuMjQ3LDkuNDcxLDAuNDQ0LDE0LjIzNywwLjU5ICAgICAgTDk5LjI0LDIxMS43MzRMODYuMTg5LDI0MS4zNzJ6Ii8+CgkJCTwvZz4KCQkJPGc+CgkJCQk8cGF0aCBzdHlsZT0iZmlsbDojNzI3MjZBOyIgZD0iTTIyOC45ODEsMjUxLjU2MmwtMTQuODMzLTYuMjM5bDEzLjQ2MS00Ljc4M2wtOS4wMDQtMjkuMTM3bC0xNi45MDctMTMuMTQ3bC0zMi4xMTEsMTIwLjU3OSAgICAgIGM2Ljk3LTAuMTQ2LDEzLjk2Mi0wLjQxLDIwLjkwMy0wLjc3NkwyMjguOTgxLDI1MS41NjJ6Ii8+CgkJCQk8cGF0aCBzdHlsZT0iZmlsbDojNjM2MzU4OyIgZD0iTTIwMS42OTMsMTk4LjI1NmwtNi4yNzgsMjMuNTY3YzguNTM4LDEuOTQ1LDE4LjM4NSwzLjUwNywyOC4xNzEsNS43MTFsLTQuOTg1LTE2LjEzMSAgICAgIEwyMDEuNjkzLDE5OC4yNTZ6Ii8+CgkJCQk8cGF0aCBzdHlsZT0iZmlsbDojNzI3MjZBOyIgZD0iTTk5LjIzNSwyMTEuNzRsLTguOTI2LDI4LjgwNmwxMy40NjEsNC43ODNsLTE0LjgzMyw2LjIzOWwzOC41NjMsNjYuNjIxICAgICAgYzYuOTAyLDAuMzQzLDEzLjg3NywwLjU4NSwyMC44NDcsMC43MDNMMTE2LjIyLDE5OC4yNjdMOTkuMjM1LDIxMS43NHoiLz4KCQkJPC9nPgoJCTwvZz4KCQk8Zz4KCQkJCgkJCQk8ZWxsaXBzZSB0cmFuc2Zvcm09Im1hdHJpeCgtMC4xNzcgMC45ODQyIC0wLjk4NDIgLTAuMTc3IDM4NS42NTYxIC04NS4zNzExKSIgc3R5bGU9ImZpbGw6I0NDQTQ4MzsiIGN4PSIyMjguNTIyIiBjeT0iMTE4LjU1OCIgcng9IjIxLjM4NiIgcnk9IjExLjYyOSIvPgoJCQkKCQkJCTxlbGxpcHNlIHRyYW5zZm9ybT0ibWF0cml4KC0wLjk4NDIgMC4xNzcgLTAuMTc3IC0wLjk4NDIgMjAwLjA5MDMgMjE5LjI4MDcpIiBzdHlsZT0iZmlsbDojREJCNDkxOyIgY3g9IjkwLjI2NSIgY3k9IjExOC41NjUiIHJ4PSIxMS42MjkiIHJ5PSIyMS4zODYiLz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6I0RCQjQ5MTsiIGQ9Ik0yMjMuNjQxLDQ3LjM2NUgxNTkuNDJIOTUuMjMzYzAsMC0zNS45ODksMTQ2LjYxNCw2NC4xODcsMTYwLjgwNiAgICAgQzI1OS42MzYsMTkzLjk3OSwyMjMuNjQxLDQ3LjM2NSwyMjMuNjQxLDQ3LjM2NXoiLz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6I0NDQTQ4MzsiIGQ9Ik0xNTkuNDIsMjA4LjE3MWMxMDAuMjE2LTE0LjE5Miw2NC4yMjEtMTYwLjgwNiw2NC4yMjEtMTYwLjgwNmgtMTUuMDI0ICAgICBjNC4xMTQsNjEuMjQyLDkuODA4LDkzLjc3NC0xMy44MTUsMTI5LjI0QzE3Ni4wODUsMjA0LjcwOCwxNTkuNDIsMjA4LjE3MSwxNTkuNDIsMjA4LjE3MXoiLz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6IzM5M0MzRDsiIGQ9Ik0xODcuODM4LDUuNDhjMCwwLTE5LjgyNC05LjMzLTQ2LjQ3Ny0zLjY0MmMtMTkuOTUzLDQuMjYtNTIuNDIzLDE3LjgyOS01OS43Myw0Ni44OTMgICAgIGMwLDAtMTAuOTMyLDQ3LjQ4Myw3LjY4Myw2Ny45MzFjMCwwLTAuOTE2LTE4LjU0OCwwLjk1Ni0zMy4zMTNjMCwwLDExLjE3NCw0Ljk0NiwzMy42OSw0LjY1OSAgICAgYzMwLjE4OC0wLjM4Miw1OS40NDQtMTIuNzc2LDY4LjQ0Mi0yNi4zNTVjMCwwLTEuMDM0LDE5LjUzMi0xMC44NzYsMjcuNTAyYzAsMCwzNC41MjItNS4zOTYsNDQuNzI5LTI1Ljg4MyAgICAgYzAsMCwzLjQxNywxNy45MzUsMy40MTcsNTEuMTU5YzAsMCw1LjM5LTcuNTA5LDYuNjQ5LTE5LjYwNWMyLjg1NS0yNy40NC0yLjMzMy02NS4zMzQtMjIuODc2LTY0LjA2OSAgICAgQzIxMy40NDYsMzAuNzU2LDIwNC43NDUsMTMuNDksMTg3LjgzOCw1LjQ4eiIvPgoJCQk8cGF0aCBzdHlsZT0iZmlsbDojQ0NBNDgzOyIgZD0iTTE4MS41MjYsODkuMTU0YzkuODM2LTcuOTc2LDEwLjg3Ni0yNy41MDIsMTAuODc2LTI3LjUwMiAgICAgYy04Ljk5OSwxMy41NzQtMzguMjQ4LDI1Ljk2Ny02OC40NDIsMjYuMzU1Yy0yMS43NjMsMC4yNzUtMzIuOTMxLTQuMzMzLTMzLjY1MS00LjY0M2MxLjQzMywwLjYxMyw0NC4xNTYsMTguNTU0LDkxLjY3Mi0zLjg4NCAgICAgYzAsMC0yLjU4LDkuNTI3LTguMTM5LDEyLjgwNGMwLDAsNDMuODY5LTAuNzkzLDUyLjQxOC0yOS4wMDhDMjE2LjA1NCw4My43NTgsMTgxLjUyNiw4OS4xNTQsMTgxLjUyNiw4OS4xNTR6Ii8+CgkJPC9nPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" height=100 width=100 />
    </div>
<hr>
    <div class="container">
      <label for="username"><b>Mobile Number</b></label>
      <input id="mobile" type="text" placeholder="Enter Mobile Number" onclick="inputNumber()" name="mobile" required>

      <label for="psw"><b>Password</b></label>
      <input id="psw" type="password" placeholder="Enter Password" name="password" required>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw"><a href="#">Forgot Password?</a></span>
      <br>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel</b></button>
        <button id="loginbtn" name="submit" type="submit"  style="float: right" class="loginbtn"><b>Login</b></button>

    </div>
  </form>
</div>

<div id="id02" onclick="redirectto()">


</div>


<script>

var queryString = location.search;
if(queryString.indexOf("email") != -1)
window.location = "UserRegistration.php";

//checking the g-mail id
function validategmail()
{
  if(document.getElementById("emailId").value.indexOf("@gmail.com") == -1)
  {
    alert("Please Enter G-mail address");
  }
}

function redirectto()
{
    window.location = "UserRegistration.php";

}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event)
{
    if (event.target == modal)
    {
        modal.style.display = "none";
    }
}
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event)
{
  if (event.target == modal)
  {
    modal.style.display = "none";
  }
}
function inputNumber(evt)
{
  var ch = String.fromCharCode(evt.which);
  if(!(/[0-9]/.test(ch)))
  {
    evt.preventDefault();
  }

}

</script>

</body>
</html>
