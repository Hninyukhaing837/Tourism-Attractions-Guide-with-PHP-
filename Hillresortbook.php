<html>
<title></title>
<head>
   <link href="css/drop.css" rel="stylesheet">
     <script src="js/drop.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/font-awesome.min.css" rel="stylesheet">
<body>
<header class="w3-container ">
<div class="topnav" id="myTopnav">
    <div class="header-limiter">
    <img src="Bagan images/mandalay2.jpg" alt="" height="110" width"100" style="float:left; position:relative;"/>
    <h1 >&nbsp; &nbsp; <span>Mercure Mandalay Hill Resort's <span>Booking Page</span></h1>
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
</html><br>
<?php
$con=mysqli_connect('localhost','root','') or die("database can not connect");
mysqli_select_db($con,"thesis");

 if(isset($_POST['book'])){
    $username=$_POST['username'];
      $phone=$_POST['phone'];
        $email=$_POST['email'];
        $guest=$_POST['guest'];
          $checkindate=$_POST['checkindate'];
            $checkoutdate=$_POST['checkoutdate'];
          $rooms=$_POST['rooms'];
        
   $sql="INSERT INTO mercure VALUES ('$username','$phone','$email','$guest','$checkindate','$checkoutdate','$rooms')";
    $sql1=mysqli_query($con,$sql);
     
       $count=$con->affected_rows;
      if ($count>0) 
      {
        echo "<script>alert('Successfully booked!')</script>";
        echo "<script>window.location='Hillresortbook.php'</script>";
       }
       
       else {
        echo "<script>alert('Fail!')</script>";
       }

 }
?>

<!DOCTYPE html>
<html lang="en">
   
<head><title></title>
<link href="css/bookform.css" rel="stylesheet">
      <style>
    body {  

         background-image: url("Bagan images/mpalace2.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size:cover;
       color: #000;
      font: 14px Arial;
     padding: 0;

} 
</style> 
</head>
<body>
<form action="Hillresortbook.php" method="post">
   <h1>Book Here!</h1>
    <label for="">Username</label>
    <input type="text" class="form-control" name="username" value="" placeholder="Enter your name!" required><br>
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" value="" placeholder="Example@gmail.com" required><br>
    <label for="">Phone</label>
    <input type="text" class="form-control" name="phone" value="" placeholder="Enter your phone no!" required><br>
       <label for="">Guests</label>
    <input type="number" class="form-control" name="guest" value="" required><br>
    <label for="">Check-In Date</label>
    <input type="date" class="form-control" name="checkindate" value="" required><br>
        <label for="">Check-Out Date</label>
    <input type="date" class="form-control" name="checkoutdate" value="" required><br>
     <label for="">Room</label>
   <select name="rooms" required>
  <option value="Superior 2 single beds">Superior 2 single beds</option>
  <option value="Superior king bed">Superior king bed</option>
  <option value="Deluxe king">Deluxe king</option>
  <option value="Deluxe 2 single">Deluxe 2 single</option>
  <option value="Jasmine Garden View">Jasmine Garden View</option>
  <option value="Orchid Lake View">Orchid Lake View</option>

</select>
<br><br>
      <input type="submit" name="book" class="" value="Book"></button>

</form>

</body>
</html>