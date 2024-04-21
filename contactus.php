<?php
  
  include( 'db.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Curiosity Hotel</title>
    <link rel="stylesheet" href="homestyle.css" />
    <link rel="stylesheet" href="contactusstyle.css" />
    <script src="script.js" defer></script>
  </head>
  <body>
  <nav>
        <div class="navbar">
          <img src="./images/Curiosity Hotel.svg" alt="" />
          <a href="./Announcements.php">Announcements</a>
        <a href="./info.php">Information</a>
        <a href="./book.php">Book Now</a>
        <a href="./contactus.php">Contact Us</a>
        </div>
      </nav>
    <div class="contact">
      <h1 class="contactTitle">Contact Us</h1>
      <div class="locationDiv">
        <img src="./images/Location.svg" alt="" />
        <div class="location">
          <p>16 Saray El Gezira Street, Zamalek</p>
          <p>Cairo, Egypt</p>
          <p>P.O. Box 33</p>
        </div>
      </div>
    </div>
    <div class="team">
      <div class="teamCard">
        <img src="./images/profile.svg" alt="" />
        <h1>John Smith</h1>
        <h2>General Manager</h2>
        <p>john.smith@curiosityhotel.com</p>
      </div>
      <div class="teamCard">
        <img src="./images/profile.svg" alt="" />
        <h1>Sarah Lee</h1>
        <h2>Customer Service Manager</h2>
        <p>sarah.lee@curiosityhotel.com</p>
      </div>
      <div class="teamCard">
        <img src="./images/profile.svg" alt="" />
        <h1>Emily Johnson</h1>
        <h2>Sales Manager</h2>
        <p>emily.johnson@curiosityhotel.com</p>
      </div>
      <div class="teamCard">
        <img src="./images/profile.svg" alt="" />
        <h1>Michael Davis</h1>
        <h2>Reservations Manager</h2>
        <p>m.davis@curiosityhotel.com</p>
      </div>
      <div class="teamCard">
        <img src="./images/profile.svg" alt="" />
        <h1>Jessica Brown</h1>
        <h2>Marketing Manager</h2>
        <p>jessica.brown@curiosityhotel.com</p>
      </div>
    </div>
    <form action="contactus.php" method="get">

      <div class="sendUs">
        <h1>Send Us a Message</h1>
        <textarea name="Message" id="" cols="30" rows="10"></textarea>
        <button>Send</button>
      </div>
    </form>
  </body>
</html>
<?php
    $message = $_GET['Message'];
    $query = "INSERT INTO messages (Message) VALUES ('$message')";
    $result = mysqli_query($connection, $query);