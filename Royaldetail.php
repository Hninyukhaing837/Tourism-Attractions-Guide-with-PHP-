 <html>
<title></title>
<head>
   <link href="css/drop.css" rel="stylesheet">
     <script src="js/drop.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<header class="w3-container ">
<div class="topnav" id="myTopnav">
    <div class="header-limiter">
    <img src="Bagan images/royal2.jpg" alt="" height="130" width"100" style="float:left; position:relative;"/>
    <h1 >&nbsp; &nbsp; <span>Royal Bagan <span>Hotel's Details</span></h1>
      <a href="home.html"  class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Destination
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="bagan.html">Bagan</a>
      <a href="mandalay.html">Mandalay</a>
       <a href="beach.html">Beaches</a>
     
    </div>
  </div> 
   <a href="package.php" >Tour Packages</a>
  <div class="dropdown">
    <button class="dropbtn">Hotels
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="baganhotel.php">Hotels in Bagan</a>
      <a href="manhotel.php">Hotels in Mandalay</a>
       <a href="beachhotel.php">Hotels in Beaches</a>
    </div>
  </div>
  <a href="transportation.php">Transportation</a>
  <a href="contact.php">Contact Us</a>
  <ul style="float:right"><a class="active" href="login.php">Admin Login</a></ul>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
 </div></div>
</header>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="css/image.css" rel="stylesheet">
     <script src="js/image.js"></script>
     <style>
         h1{
        text-align:center;
        text-transform: uppercase;;
        padding-top: 0px;
    }


</style>

</head>
<body>
      
  <h1 style="color: blue;">Remember to book your favourite room!</h1>
    <p style="color:black; text-align:left;"><b>Only 6 rooms left!</b><br>
     <i class="fa fa-calendar" aria-hidden="true"></i> Free cancellation before 25 Jul 2018!<br>
     <i class="fa fa-usd"  aria-hidden="true"></i> Pay at the hotel!<br>
     <i class="fa fa-wifi" aria-hidden="true"></i> Free Wifi Available!</p><hr>
        <p style="color:black; text-align: left; "> <i class="fa fa-map-marker" style="width:30px"></i>No(1441),Anawyathar road, Bagan-Nyaung Oo Township., Nyaung U, 11101 Bagan, Myanmar<br>
          <i class="fa fa-phone" style="width:30px"></i>+95-42333333</p>
         
</header>
 <!-- Container for the image gallery -->

<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="Bagan images/Royalgarden.jpg" style="width:100%; height: 400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="Bagan images/Aureum.jpg" style="width:100%; height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="Bagan images/Royalgrand.jpg" style="width:100%; height: 400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="Bagan images/Royalsup.jpg" style="width:100%; height: 400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="Bagan images/royalspa.jpg" style="width:100%; height: 400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="Bagan images/royalguest.jpg" style="width:100%; height:400px">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="Bagan images/Royalgarden.jpg" style="width:100%;height:165px;" onclick="currentSlide(1)" alt="Superior Double or Twin Room with Garden View">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/Aureum.jpg" style="width:100%;height:165px;" onclick="currentSlide(2)" alt="Family Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/Royalgrand.jpg" style="width:100%; height:165px;" onclick="currentSlide(3)" alt="Grand Deluxe Double Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/Royalsup.jpg" style="width:100%; height:165px;" onclick="currentSlide(4)" alt="Superior Double">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/royalspa.jpg" style="width:100%; height:165px;" onclick="currentSlide(5)" alt="1 Person in 5-Bed Dormitory- Mixed- Spa">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/royalguest.jpg" style="width:100%; height:165px;" onclick="currentSlide(6)" alt="Superior Double or Twin - Guestroom">
    </div> 
  </div>
</div> 
</body>
</html><br>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #a1d1f2}

th {
    background-color: #000fff;
    color: white;
}

th {
    height: 50px;
}
</style>
</head>
<body>
<table  id="mytable">
   <thead>
    <tr>
     <th>Room Type</th>
     <th>Facilities</th>
     <th>Your Choices</th>
     <th>Today's Price</th>
   </tr>
   </thead>
   <tbody>

<?php
$db=mysqli_connect('localhost','root','')or die("Unable to connect to MySQL");
mysqli_select_db($db,"thesis")or die("Could not select example");
$data1=$db->query("select* from royalroom");

while ($row = mysqli_fetch_assoc($data1))
 {
    echo '<tr>';
    foreach($row as $value)
    {
      echo'<td>'.$value.'</td>';
    }
}

?>
  
</tbody>
</table>
</body>
</html>