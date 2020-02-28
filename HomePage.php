<?php 
	session_start();
	if (!isset($_SESSION['cartEmpty'])) {
		$_SESSION['cartEmpty'] = true;
	}
	if (!isset($_SESSION['products'])) {
		$products = array("apple"=>0, "banana"=>0, "pear"=>0, "mango"=>0, "pineapple"=>0, "peach"=>0, "watermelon"=>0, "potato"=>0, "lettuce"=>0, "onion"=>0, "pepper"=>0, "corn"=>0, "ribeye"=>0, "breast"=>0, "porkchop"=>0, "chickenleg"=>0, "salmon"=>0, "lambleg"=>0, "porkbelly"=>0, "chickenwing"=>0, "wholemilk"=>0, "soymilk"=>0, "egg"=>0, "yogurt"=>0, "butter"=>0, "acheese"=>0, "scheese"=>0, "cream"=>0, "strawberry"=>0, "celery"=>0, "broccoli"=>0, "carrot"=>0);
		$_SESSION['products'] = $products;
	}
	if (!isset($_SESSION['username'])) {
		header('location: login_signup.php');
	}
	if (!isset($_SESSION['prices'])) {
		$prices = array("apple"=>1.15, "banana"=>0.58, "pear"=>1.6, "mango"=>1.5, "pineapple"=>3.5, "peach"=>1.5, "watermelon"=>0.4, "potato"=>2, "lettuce"=>4, "onion"=>1, "pepper"=>1.5, "corn"=>1, "ribeye"=>10, "breast"=>3.2, "porkchop"=>4, "chickenleg"=>0.95, "salmon"=>25, "lambleg"=>11, "porkbelly"=>2.3, "chickenwing"=>1.4, "wholemilk"=>3.3, "soymilk"=>4.3, "egg"=>4, "yogurt"=>2, "butter"=>3, "acheese"=>6, "scheese"=>3.3, "cream"=>2, "strawberry"=>2.5, "celery"=>2, "broccoli"=>1.7, "carrot"=>0.7);
		$_SESSION['prices'] = $prices;
	}
	
	if (!isset($_SESSION['stock'])) {
		$stock = array("apple"=>100, "banana"=>100, "pear"=>100, "mango"=>100, "pineapple"=>100, "peach"=>100, "watermelon"=>100, "potato"=>100, "lettuce"=>100, "onion"=>100, "pepper"=>100, "corn"=>100, "ribeye"=>100, "breast"=>100, "porkchop"=>100, "chickenleg"=>100, "salmon"=>100, "lambleg"=>100, "porkbelly"=>100, "chickenwing"=>100, "wholemilk"=>100, "soymilk"=>100, "egg"=>100, "yogurt"=>100, "butter"=>100, "acheese"=>100, "scheese"=>100, "cream"=>100, "strawberry"=>100, "celery"=>100, "broccoli"=>100, "carrot"=>100);
		$_SESSION['stock'] = $stock;
		
		$conn = mysqli_connect("localhost", "root", "", "dbtest");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error()); 
		}
		$sql = "SELECT * FROM inventory";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		foreach ($user as $x => $x_value) {
			$_SESSION['stock'][$x] = $x_value;
		}
	}
	
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<style>
	.userWelcome {
		color: white;
		display: inline-block;	
		float: right;
		margin-top: -65px;
		font-size: 30px;
		font-family: Raleway;
	}
	</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HomePage</title>

  <!-- Bootstrap core CSS -->
  <link href="HP2.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="HP1.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Online Food Store</span>
    <span class="site-heading-lower">Sun Valley Market</span><br><br>
  </h1>
	<div class = "userWelcome">Welcome, <?php echo $_SESSION['username'] ?>!</div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="HomePage.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Products.php">Products</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="Cart.php">Cart</a>
          </li>
		  <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="ProfilePage.php">Profile</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="login_signup.php">Sign Up / Login</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/food.jpg">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Organic Food</span>
            <span class="section-heading-lower">Stay Healthy</span>
          </h2>
          <p class="mb-3">Delivering fresh organic food from our fields to your doorstep.
          </p>
          <div class="intro-button">
            <a class="btn btn-primary btn-xl" href="Products.php">Start Shopping!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>

