<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutus.css" type="text/css">
    <title>About Us</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f3ecec;
    
  }

  .navbar {
    background-color: #f8f8f8;
    overflow: hidden;
    display: flex;
    justify-content: flex-end;
  }

  .navbar a {
    color: #333;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 18px;
  }

  .header {
    background-color: #f8f8f8;
    padding: 20px;
    text-align: left;
  }
  .text-container {
    height: 10vh;
    width: 10vw;
    display: flex;
    /* justify-content: center; */
    /* align-items: center; */
    text-align: center;
  }
  
  .text-container h1{
    margin: 0;
    font-size: 43px;
    color: rgba(225,225,225, .01);
    background-image: url("https://images.unsplash.com/photo-1499195333224-3ce974eecb47?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2cf549433129d4227d1879347b9e78ce&auto=format&fit=crop&w=1248&q=80");
    background-repeat: repeat;
    -webkit-background-clip:text;
    animation: animate 15s ease-in-out infinite;
    text-align: center;
    text-transform: uppercase;
    font-weight: 900;
  }
  
  
    @keyframes animate {
      0%, 100% {
        background-position: left top;
      }
      25%{
        background-position: right bottom;
       }
      50% {
        background-position: left bottom;
      }
      75% {
        background-position: right top;
      }   
  }
  footer {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
    font-size: 14px;
    /* margin-top: 50px; */
  }
  h1{
    font-family: sans-serif;
    font-size: 50px;
    padding: 20px;
    margin: 20px;
  }
  p{
    font-family: sans-serif;
    font-size: 20px;
    padding: 20px;
    margin: 20px;
  }
  .contact{
    padding: 20px;
    /* margin: 10px; */
    border: 1px solid #ccc;
    background-image: linear-gradient(to right,#C193c5,#7BC6CC);
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
        <a href="home.php">Home</a>
        <a href="destination.html">Destination</a>
        <a class="active">About Us</a>
        <a href="gallery.html">Gallery</a>
    </div>
    <div class="container">
        <div class="abt-box">
            <h1>About us</h1>
            <p>Welcome to #Memories - Your Gateway to Extraordinary Family Adventures!

                At #Memories, we believe that family time is precious and that every moment spent together should be filled with joy, laughter, and cherished memories. As a family tour website, we are dedicated to providing you with unforgettable experiences that will create a tapestry of beautiful memories to last a lifetime.<br><br>
                
                What sets us apart is our commitment to curating the best deals for your family tours. We understand the importance of budget-friendly options without compromising on quality and enjoyment. With #Memories, you can rest assured that you will find exceptional value and incredible experiences tailored to suit your family's unique preferences and interests.<br><br>
                
                Safety is our utmost priority. We recognize the significance of peace of mind when it comes to your family's well-being during travel. That's why we carefully select our partners and destinations, ensuring that they meet the highest safety standards. From secure accommodations to reliable transportation, we go the extra mile to ensure your family's safety throughout the journey.<br><br>
                
                Our team of travel experts is passionate about crafting seamless itineraries that cater to your family's needs and desires. Whether you seek thrilling adventures, cultural immersions, or relaxing getaways, we handpick the finest destinations and activities that will captivate every member of your family. We believe in providing a diverse range of options, allowing you to choose the experiences that resonate with your family's interests and create lasting memories.<br><br>
                
                Flexibility is key when it comes to family travel. That's why #Memories offers you the freedom to customize your own tour. We understand that every family is unique, and our tailored approach allows you to design an itinerary that perfectly aligns with your preferences. From selecting specific destinations to handpicking activities, you have the power to create a truly personalized and memorable journey.<br><br>
                
                We take pride in our exceptional customer service. Our dedicated team is here to assist you every step of the way, ensuring a hassle-free and enjoyable experience. From answering your inquiries to providing guidance and support during your trip, we strive to exceed your expectations and make your family's adventure with #Memories truly unforgettable.<br><br>
                
                Join us on this extraordinary journey where magical moments, breathtaking sights, and unforgettable experiences await. Let us be your trusted companion as you embark on a family tour filled with love, laughter, and endless memories. #Memories is here to create an enchanting chapter in your family's story.<br><br>
                
                Start your family's adventure today with #Memories - where dreams come to life and cherished memories are made.</p>
        </div>
    </div>
     
    <div class="contact">
        <div class="contact-box">
            <h2>Contact us</h2>
            <p>Reaching out to us has never been easier.
                You can choose to drop in your enquiries here at the website.
                <br><br>
                You can also call us on our Toll Free Numbers at <b>1800 890 6027,<br> 1800 270 1280</b> available from 8 AM to 6 PM on all days (Including Sundays and public holidays)
                <br><br>
                Connect to us via WhatsApp on <b>9570139266</b></p>
            <a href="form.php"><h2 style="font-family: sans-serif; cursor: pointer; text-decoration: none;">Write to us </h2></a>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 #Memories. All rights reserved.</p>
      </footer>
</body>
</html>