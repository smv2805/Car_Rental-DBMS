<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="topnav" id="myTopnav">
    <?php
    if (isset($_GET['username'])) {
      $username = $_GET['username'];
      echo "<a href='userpage.php'>$username</a>";
    }
    ?>

    <?php
      if(isset($_GET['username'])){
        
        echo "<a href=index.php?username=$username class='active'>Home</a>";
      }
      else
      {
        echo "<a href='index.php' class='active'>Home</a>";
      }
    ?>
    
    <?php
      if(isset($_GET['username'])){
        echo "<a href=booknow.php?username=$username>BookNow</a>";
      }
      else{
        echo "<a href='fail.php'>BookNow</a>";
      }
    ?>
    <a href="#Contactus">Contact Us</a>
    <a href="#aboutus">About Us</a>
   
    <!-- <button id="LS" onclick="GFG_Fun">Login/SignUp</button> -->
    <?php
      if(isset($_GET['username'])){
        echo "<a id='LS' href='logout.php'>Logout</a>";
      }
      else{
        echo "<a id='LS' href='login.php'>Login/SignUp</a>";
      }
    ?>
    
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
  <div class="w3-content w3-section" style="max-width:800px">
    <img class="mySlides w3-animate-fading" src="slide2.jpg" style="width:100%">
    <img class="mySlides w3-animate-fading" src="slide1.jpg" style="width:100%">
    <img class="mySlides w3-animate-fading" src="slide3.jpg" style="width:100%">
  </div>

  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 5000);
    }
  </script>
  <section id="section1">
    <h2>RiderProvider</h2>
    <p>We Are Here To Provide You The Best Choices</p>

  </section>

  <section id="aboutus">
    <h2>
      About Us!
    </h2>
    <pre>
RiderProvider has a new face. After more than 20 years in business, we decided to give a fresher look to our brand and our services. With our fully renewed fleet of vehicles, we are ready to meet all expectations and requirements.
                                          <b>Why choose us?</b>
-If you want to book directly through a supplier, and not through a broker – choose Renaissance Rent A Car
-this will give you better flexibility in terms of vehicle choices;
-vehicle make and model will be confirmed, and not “similar” to those you selected;
-you can directly negotiate some of the terms and conditions, payment options, especially if you require unique or long term rental service;
-you can book “commission free”;
-you can reach us 24/7 on our mobile numbers;
-you can call us free from the “Free call” service on our website;
We offer a varied fleet of cars, ranging from the compact Toyota Yaris to the 8-seater VW Multivan. All our vehicles have air conditioning,  power steering, electric windows. All our vehicles are bought and maintained at official dealerships only. Automatic transmission cars are available in every booking class.
        </pre>

  </section>

  <section id="Contactus">
    <h3>Contact Us</h3>
    <p>Email:xyz@somemail.com</p>
    <div class="reviewform">
      <form action="/action_page.php">
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Last Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="review">Reviews:</label>
          </div>
          <div class="col-75">
            <textarea id="review" name="review" placeholder="Write something.." style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>


  </section>

</body>

</html>