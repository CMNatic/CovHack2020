<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ben Eriksson">

    <title>I've CovsIT</title>
	<!-- custom css styles -->
	<link href="../css/styles.css" rel="stylesheet">

    <!-- Ionicons styles -->
  <link href="../css/ionicons.min.css" rel="stylesheet">


  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>


	<!-- Bootstrap Library -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" >

    <!-- Javacript & Jquery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar bg-dark navbar-dark navbar-expand-lg fixed-top">
   <div class="container">
       <a class="navbar-brand" href="index.html"><img src="../imgs/logo.png" width="64" height="64"><!--<i class="ionicons ion-android-bicycle"></i>-->I've CovsIT</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
       <span class="navbar-toggler-icon"></span></button>

    <!-- Hyperlink to the 'About' section of the page -->
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="navbar-item active">
          <a class="nav-link" href="../index.html">About</a>
        </li>

        <li class="navbar-item">
          <a class="nav-link" href="../DashboardPage/dashboard.php">Dashboard</a>
        </li>

        <li class="navbar-item">
          <a class="nav-link" href="../TheftMap/theftmap.html">Theft Map</a>
        </li>

        <li class="navbar-item">
          <a class="nav-link" href="../ContactUs/contactus.html">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>

</nav>

<div class="indexHeader">
  <h2 class="display-4">Search for your Bicycle by Manufacturer</h2>
</div>

<form action="index.php" method="get">

<div class="input-group">
  <input type="text" id="searchForBicycle" name="searchForBicycle" placeholder="Raleigh">
    <div class="input-group-append" id="button-addon4">
      <input id="submit" type="submit" value="Search!">
    </div>
  </div>
<br>
<br>
</form>


<?php


echo "<table><tr><th></th></tr>";


  searchForBicycle();
  // Run show Item function
  function searchForBicycle() {
    include "config.php";
    $searchForBicycle = $_GET['searchForBicycle'];
    console.log("$searchForBicycle");
    if ($searchForBicycle != "") {
      $sql = "SELECT * FROM `tbl_bicycles` ".
        " WHERE ".
        " Brand = '$searchForBicycle'";
      console.log("$searchForBicycle");

      echo "Your search item <b><u>" . $searchForBicycle . "</b></u> has the following matches: <br> ";

      $res = mysqli_query($connection, $sql);
      while($row = mysqli_fetch_array($res)) {

      $serialNumber = $row[0];
      $brand = $row[1];
      $model = $row[2];
      $accessories = $row[3];
      $type = $row[4];
      $colour = $row[5];


        echo "<tr><td><strong>Serial Number:</strong></td><td>" .$serialNumber ."</td></tr>";
        echo "<tr><td><strong>Brand</strong></td><td>" .$brand ."</td></tr>";
        echo "<tr><td><strong>Model</strong></td><td>" .$model ."</td></tr>";
        echo "<tr><td><strong>Accessories</strong></td><td>" .$accessories ."</td></tr>";
        echo "<tr><td><strong>Type</strong></td><td>" .$type ."</td></tr>";
        echo "<tr><td><strong>Colour</strong></td><td>" .$colour ."</td></tr>";
          echo    "<tr><td><br><br></td></tr>";

      };
    }
echo "</table>";

  }
?>

</section>
</body>
</html>