<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="homepage.css" type="text/css">

  <head>
    <title>#Memories - Family Tour Management</title>
  </head>
  <style>
  .popover-content {
    font-size: 17px;
    font-family: sans-serif;
    float: right;
    margin: 20px;
    padding: 10px;
    border: 1px solid black;
    border-radius: 5px;
    background-color: #ECF8F9;
    color: #B70404;

  }
</style>

  <body>
    <!-- Header -->
    <div class="header">
      <div class="text-container">
        <h1>#Memories</h1>
      </div>
    </div>

    <!-- Navbar -->
    <div class="navbar">
      <div class="popover">
        <a href="#" class="nav-alert hover-button">Home</a>

        <a href="#" class="nav-alert hover-button">Destination</a>

        <a href="#" class="nav-alert hover-button">About Us</a>

        <a href="#" class="nav-alert hover-button">Gallery</a>
      </div>
    </div>
    <div class="popover-content" id="popoverContent">
      Please Login to continue!!
    </div>

    <h1 id="welc">Welcome to #Memories!</h1>

    <p class="start">We are thrilled to have you here and embark on an
      incredible journey of adventure, exploration, and
      unforgettable moments. At #Memories, we are dedicated to curating the best
      deals for your family tours, ensuring
      that you create lifelong memories together.

      Whether you're seeking a thrilling adventure, a relaxing getaway, or a
      cultural exploration, we have the perfect
      packages tailored just for you. But that's not all! We also offer the
      flexibility to create your own personalized
      tour, giving you the freedom to design every detail of your dream
      vacation.

      Join us on this exciting adventure that awaits you. Pack your bags, leave
      your worries behind, and get ready to
      immerse yourself in a world full of awe-inspiring destinations,
      captivating experiences, and cherished memories.

      At #Memories, we understand the importance of family and the joy that
      comes from spending quality time together.
      That's why our dedicated team works tirelessly to ensure that every aspect
      of your trip is taken care of, allowing
      you to focus on creating unforgettable moments with your loved ones.

      So, whether you're a seasoned traveler or embarking on your very first
      family tour, we invite you to join us at
      #Memories and unlock a world of extraordinary experiences. Let us be your
      guide as we help you create memories that
      will be treasured for a lifetime.

      Get ready to embark on an amazing adventure and gather a plethora of
      precious memories. We can't wait to have you as
      part of our #Memories family!

      Start exploring today and let the magic begin!

    </p>

    <!-- Card Carousel -->
    <div class="card-carousel-container">
      <div class="card-carousel" id="cardCarousel">
        <div class="card">
          <img src="goa.jpg" alt="Destination 1">
          <h3>Ajay patel</h3>
          <p>Transportation was comfortable and efficient with timing.
            The tour portion of the experience was nice for learning a
            bit about the history of the Medieval town and the guide
            was very interactive. I enjoyed having the hour-two hours
            or so to explore the town freely, the chocolate shops
            are fantastic, and an overall lovely day trip that can
            accomplished in just a few hours!</p>
        </div>
        <div class="card">
          <img src="paris.jpg" alt="Destination 2">
          <h3>Anonymous</h3>
          <p>"Paris is a captivating city, perfect for families! Explore iconic
            landmarks like the Eiffel Tower, indulge
            in delicious pastries, and wander through charming neighborhoods. A
            memorable and enriching experience
            awaits!"</p>
        </div>
        <div class="card">
          <img src="dehradun.jpg" alt="Destination 2">
          <h3>Ananya Singh</h3>
          <p>"My trip to Dehradun was an absolute delight! I thoroughly enjoyed
            the tour, immersing myself in the beauty
            of the city. It was a truly memorable experience that I cherish."</p>
        </div>
        <div class="card">
          <img src="kashmir.jpg" alt="Destination 2">
          <h3>Abhishek </h3>
          <p>Full adventure experience. The locations were amazing, and the tour
            guide was great. He took us to the best
            places for our meals. </p>
        </div>
        <div class="card">
          <img src="mauritius.jpeg" .jpg" alt="Destination 2">
          <h3>Sarthak </h3>
          <p>It was a great experience for me and my wife. Loved the hotel
            rooms,the bed was comforting, and the bus was
            always before time.Taking a lot of #memories back with me.</p>
        </div>
        <div class="card">
          <img src="Udaipur.webp" alt="Destination 2">
          <h3>Suraj Kumar</h3>
          <p>Loved the deal. It was a very good experience with the hotel staffs
            and specially or tour guide. He gave us a
            lot of insights of the kilaas .</p>
        </div>
        <div class="card">
          <img src="spain.webp" alt="Destination 2">
          <h3>Kabir </h3>
          <p>Breathtaking experience , enjoyed so much. The adventure was
            amazing, specially in para gliding and the Bull
            Race we got goosebumps but everything was taken care of and taking
            back a lot of #Memories.</p>
        </div>
        <!-- Add more card elements as needed -->
      </div>
    </div>

    <div class="log-container">
      <div class="logform">
        <h2>Join us now and create #Memories</h2>
        <a href="loginnew.php"><button>Login</button></a>
        <a href="signup.php"><button>Sign Up</button></a>
      </div>
    </div>
    <footer>
      <p>&copy; 2023 #Memories. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-7ru0xxR+7Z9ZnhE2nCCrRxrFDTAs8/bYG5rr9xWJEBTDLg9I/rz+Mi+utHX8f9tk" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <script>
    // logic for infinite card carousel
    const cardCarousel = document.getElementById('cardCarousel');
    const cards = cardCarousel.getElementsByClassName('card');

    function moveCards() {
      const cardWidth = cards[0].offsetWidth;
      cardCarousel.style.animationDuration = `${cardWidth / 100}px`;

      const firstCard = cards[0];
      cardCarousel.appendChild(firstCard.cloneNode(true));
      cardCarousel.removeChild(firstCard);
    }

    // Automatically move cards every 3 seconds (adjust the interval as needed)
    setInterval(moveCards, 5000);

    const buttons = document.getElementsByClassName('hover-button');
    const popoverContent = document.getElementById('popoverContent');

    for (let i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener('mouseover', showPopover);
      buttons[i].addEventListener('mouseout', hidePopover);
    }

    function showPopover() {
      popoverContent.style.display = 'block';
    }

    function hidePopover() {
      popoverContent.style.display = 'none';
    }


  </script>
  </body>

</html>