<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: white;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="secondabhi.php#">ANTibroker.COM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
     
	  <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="sell.php">Post your properties</a></li>
        <li><a href="#">About us</a></li>
        <li class="dropdown active">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Email harshaldesale45@gmail.com</a></li>
          <li><a href="#">Watsapp 9702901681</a></li>
          <li><a href="#">apply for jobs</a></li> 
        </ul>
      </li>
        <li><a href="http://localhost/photoz/register.php#"><span class="glyphicon glyphicon-log-in"> </span> Sign up</span> </a></li>
		 <li><a href="http://localhost/photoz/index.php#"><span class="glyphicon glyphicon-log-in"> </span> Sign in</a></span></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
  
    <div class="col-sm-2 sidenav" style="padding top: 80px;">
      <div class="list-group">
  <a href="#" class="list-group-item active">
    CATEGORY
  </a>
  <a href="#buy.php" class="list-group-item">BUY</a>
  <a href="sell.php" class="list-group-item ">SELL</a>
  <a href="http://localhost/photoz/rent.php#" class="list-group-item ">RENT</a>
  <a href="#" class="list-group-item ">FLATEMATES</a>
</div>
    </div>
   <div class="col-sm-8 text-left">
   <div class="container-fluid text-left">
  <h2>Buy home without a broker</h2>
  <form action="buy_insert.php" method="post">
    
	<div class="form-group">
      <label for="name">City:</label>
      <input type="text" name="search10"  maxlength='50' class="form-control"  id="search10" placeholder="Enter city (vashi,nerul,kharghar)" required>
    </div>
	
	<div class="form-group">
      <label for="name">BHK:</label>
      <input type="text" name="search11"  maxlength='50' class="form-control"  id="search11" placeholder="Enter bhk (1 or 2)" required>
    </div>
	
	<div class="form-group">
      <label for="name">Bathrooms:</label>
      <input type="text" name="search21"  maxlength='50' class="form-control"  id="search21" placeholder="Enter (1 or 2)" required>
    </div>
	
	
	<div class="form-group">
      <label for="name">Type:</label>
      <input type="text" name="search31"  maxlength='50' class="form-control"  id="search31" placeholder="Furnished or Unfurnished" required>
    </div>
  <button type='submit' name='submit1' value="search1" class="btn btn-success">Submit</button>
	
  </form>
</div>
    </div>
   
  </div>

 

<footer class="container-fluid text-center">
  
</footer>

</body>
</html>


