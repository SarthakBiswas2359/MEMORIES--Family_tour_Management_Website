<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css" type="text/css">
    <title>Home</title>
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
      <a class="active">Home</a>
      <a href="destination.html">Destination</a>
      <!-- <a href="bookings.html">My Bookings</a> -->
      <a href="aboutus.php">About Us</a>
      <a href="gallery.html">Gallery</a>
    </div>
    <?php
    echo ' <div class="alert alert-success alert-dismissible fade show"
      role="alert"
      style="text-align:center;border:0.5px solid green;padding:10px;background-color:#d2f8d2;margin:30px;">
      <strong>Success!</strong> You are logged in
      <button type="button" class="close" data-dismiss="alert"
        aria-label="Close"
        style="border:none;background-color:transparent;font-size:20px; float:right;">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> ';
    ?>
     

     
    
 
    <h1 style="margin-top: 100px;font-size: 50px;">Top Places to visit in India</h1>
    <aside>
      <h3>Types</h3>
      <ul>
        <li>Domestic Tour</li>
        <li>International Tour</li>
        <li>Beach</li>
        <li>Mountains</li>
        <li>City Break</li>
        <li>Cruises</li>
        <li>Honeymoon</li>
        <li>Adventure</li>
      </ul>
    </aside>
    <div class="fcontainer">
      <div class="fitem"><a href="goa.html"><img src="goa.jpg"></a><p>Goa</p></div>
      <div class="fitem"><a href="andaman.html"><img src="Andaman.jpg"></a><p>Andaman
          & Nicobar Islands</p></div>
      <div class="fitem"><a href="manali.html"><img src="manali.jpg"></a><p>Manali</p></div>
      <div class="fitem"><a href="kashmir.html"><img src="kashmir.jpg"></a><p>Kashmir</p></div>
      <div class="fitem"><a href="udaipur.html"><img src="Udaipur.webp"></a><p>Udaipur</p></div>
      <div class="fitem"><a href="dehradun.html"><img src="dehradun.jpg"></a><p>Dehradun</p></div>
      <!-- <div class="fitem"><img src="puducherry.jpg"><p>Puducherry</p></div> -->
      <!-- <div class="fitem"><img src="delhi.jpg"><p>Delhi</p></div> -->
      <div class="fitem"><a href="varanasi.html"><img src="varanasi.jpeg"></a><p>Varanasi</p></div>
      <div class="fitem"><a href="kerala.html"><img src="kerala.jpeg"></a><p>Kerala</p></div>
      <!-- <div class="fitem"><img src="gujarat.jpg"><p>Guajarat</p></div>
    <div class="fitem"><img src="lakshadweep.jpg"><p>Lakshadweep</p></div> -->

    </div>
    <footer>
      <p>&copy; 2023 #Memories. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>

  </body>
</html>