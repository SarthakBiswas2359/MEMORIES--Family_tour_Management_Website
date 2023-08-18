<?php
$showAlert = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Connecting to the data base
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $database = "sarthak";

  $conn = mysqli_connect($servername, $username, $password, $database);

  // ///////////////////////////////////////////////////////////////////////

  $name = $_POST['name'];
  $fathersname = $_POST['fathersname'];
  $mothersname = $_POST['mothersname'];
  $email = $_POST['email'];
  $fpassword = $_POST['password'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $gender = $_POST['gender'];
  $fulladdress = $_POST['fulladdress'];
  

  //check whether email exists or not
  $existSql = "SELECT * FROM `signup` WHERE email = '$email'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);

  if ($numExistRows > 0) {
    $showError = "Email already Registered";
  } else {
    // Submit these to a database
    // $hash = password_hash($fpassword, PASSWORD_DEFAULT);
    // $sql ="INSERT INTO `signup` (`Name`, `Father's Name`, `Mother's Name`, `email`, `password`, `Phone Number`, `Date of Birth`, `Gender`, `Full Address`) VALUES ('$name', '$fathersname', '$mothersname', '$email', '$hash', '$phone', '$date', '$gender', '$fulladdress');";

    $sql = "INSERT INTO `signup` (`Name`, `Father's Name`, `Mother's Name`, `Email`,`Password`, `Phone Number`, `Date`, `Gender`, `Address`) VALUES ('$name','$fathersname', '$mothersname', '$email', '$fpassword', '$phone', '$date', '$gender','$fulladdress');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      // $showAlert = true;
      // if(isset($_POST['submit'])){
      header("location: loginnew.php");
    } else {
      $showError = true;
    }

  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signup.css" type="text/css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-';,' -->
  <title>Signup</title>
  <style>
   button:hover{
      transform: scale(1.1);
      color: white;
      background-color: black;
      
    }
    </style>
</head>

<body>

  <!-- Header -->
  <div class="header">
    <div class="text-container">
      <h1>#Memories</h1>
    </div>
  </div>

  <!-- Navbar -->
  <div class="navbar">
    <a href="home.html">Home</a>
    <a href="destination.html">Destination</a>
    <a href="aboutus.html">About Us</a>
    <a href="gallery.html">Gallery</a>
  </div>
  <div id="div1" class="header">
    <h1>#Memories</h1>
    <h3>Crafting Family Tales That Echo Through Generations.</h3>
  </div>

  <div id="div2" class="form">
    <h2>&emsp;Create an Account </h2>

    <?php
    if ($showAlert) {
      echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align:center;border:0.5px solid green;padding:10px;background-color:#d2f8d2;margin:30px;">
  <strong>Success!</strong> Your have successfully Signed In Now You can Login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="border:none;background-color:transparent;font-size:20px; float:right;">
      <span aria-hidden="true">&times;</span>
  </button>
</div> ';
    }

    // <button type="button" class="close" data-dismiss="alert"
    // aria-label="Close">
    // <span aria-hidden="true">×</span>
    // </button>
    if ($showError) {
      echo '<div class="alert alert-danger alert-dismissible fade show"
        role="alert"
        style="margin-left: 20px; color: red; border: 0.5px solid red; padding:10px; background-color: #ffd8d8;">
        <strong>Error!</strong>' . $showError . '

      </div>';
    }
    ?>

    <!-- do this -->
    <form method="post">
      <b>
        <fieldset>
          <legend>Personal Details</legend>
          <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
          Name&nbsp;<font color="red" size="4px">*</font>:
          &nbsp;&ensp;&nbsp;&ensp;&nbsp; <input type="text" class="form-control" name="name" id="name" required><br>

          <br>&nbsp;&nbsp;&nbsp;&nbsp;
          Father's name&nbsp;<font color="red" size="4px">*</font>:
          &nbsp;&nbsp;&nbsp;<input type="text" class="form-control" name="fathersname" id="fathersname" required><br>

          <br>&nbsp;&nbsp;&nbsp;&nbsp;
          Mother's name&nbsp;<font color="red" size="4px">*</font>:
          &nbsp;&nbsp;<input type="text" class="form-control" name="mothersname" id="mothersname" required><br>

          <br>&nbsp;&nbsp;&nbsp;&nbsp;
          Email&nbsp;<font color="red" size="4px">*</font>:
          &emsp;&emsp;&emsp;&emsp;<input type="email" class="form-control" name="email" id="email" required><br>

          <br>&nbsp;&nbsp;&nbsp;&nbsp;
          Password: &ensp;&emsp;&emsp;<input type="password" class="form-control" name="password" id="password"
            required><br>

          <br>&nbsp;&nbsp;&nbsp;&nbsp;
          Phone number&nbsp;<font color="red" size="4px">*</font>:&ensp;
          <input type="number" name="phone" id="phone" class="form-control" required><br>

          <br>&nbsp;&nbsp;&nbsp;&nbsp;
          Date of Birth: &ensp; &emsp;&emsp;<input type="date" class="form-control" name="date" id="date" required><br>

          <br>&nbsp;&nbsp;&nbsp;&nbsp;
          Gender:<br>
          &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" id="gender" value="Male">Male<br>
          &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" id="gender" value="Female">Female<br>
          &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" id="gender" value="Others">Others<br>
          <br>&nbsp;&nbsp;&nbsp;&nbsp;
          Full address:
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <textarea id="fulladdress" name="fulladdress" rows="4" cols="50"></textarea><br><br>

          
        </fieldset>

        <div class="btn">
          <div class="in">
              <button type="submit" class="submit" style=" 
      padding-top: 20px;
      padding-bottom: 20px;
      padding-left: 30px;
      padding-right: 30px;
      margin: 35px;
      width: auto;
      color: black;
      background-color: orange;
      border-radius: 20px;
      border:1px solid white;
      transition: 1s;
      font-size:20px;">Sign up</button>
          </div>
        </div>


    </form>
    <footer>
      <p>&copy; 2023 #Memories. All rights reserved.</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>

</body>

</html>