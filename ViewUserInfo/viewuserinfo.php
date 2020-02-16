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
  <h3 class="display-4">You are User: <?php session_start();
echo session_id(); ?>.</h3>
    <p>You have (0) reported Bicycles</p>
    <hr>
    <p>And have been registered since <b>2020-02-16 02:40:32</b></p>

    <a href="../DashboardPage/dashboard.php"><h4>Head back to your dashboard...</h4></a>
</div>
