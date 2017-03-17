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
    
	 body1{
	   background:url(final.jpg) ;
    background-size: 1500px;
  }
	}
	
	.nav-center {  
  text-align: center;
  ul.nav {
    display: inline-block;
    li {
      display: inline
      a {
        float: right;
      }
    }
  }
}
  </style>
</head>
<body background="final.jpg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="secondabhi.php#">ANTIbroker.COM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
     
	  <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Post your properties</a></li>
        <li class="active"><a href="#">About us</a></li>
        
		<li class="dropdown active">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Email harshaldesale45@gmail.com</a></li>
          <li><a href="#">Watsapp 9702901681</a></li>
          <li><a href="#">apply for jobs</a></li> 
        </ul>
      </li>
	 
       <li><?php
		include 'connect.php';
		session_start();
		if($_SESSION["isloggedin"])
			
			echo"<div style ='color:white' ><br>&nbspWELCOME &nbsp ".$_SESSION['name']."&nbsp</div>";
		else
			echo"Hello guest.";?></li>
		 &nbsp<li class ='active'><a href="http://localhost/photoz/index.php#"><span class="glyphicon glyphicon-log-in"></span>&nbsp logout</a></span></li>
      </ul>
    </div>
  </div>
</nav>
  

<div class="container-fluid text-center">
  <div class="row content">
  
  <div class="col-sm-2 text left">
  </div>
    <div class="col-sm-8 text left">
	
	

   
	  <br>
	  <br>
	  <br>
	  
	 <div class="row-sm-2 text center">
	   <h3>FIND HOME WITHOUT A BROKER</h3>
	   <br>
	   <br>
	    
	   </div>
	    <div class="row-sm-">
		<div class="col-sm-4">
		</div>
	  <div class="container">
 
  
  <div class="nav-center">
  <ul class="nav nav-tabs">
    <li class="active"><a href="http://localhost/photoz/buy.php">BUY</a></li>
    <li ><a href="#">SELL</a></li>
    <li ><a href="http://localhost/photoz/rent.php">RENT</a></li>
    <li class="active" ><a href="#">FLATEMATES</a></li>
  </ul>
 </div>
  </div>
  
</div>
   
    </div>
  </div>
  </div>

  <br>
  <br>
<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
 
  
 
<footer class="container-fluid text-center">
  <img src="why3.png"style="margin-bottom: 15px;">
<img src="dodo.png">


  
  <div class="row content">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators" align="center">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="buid4.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Mumbai</h3>
        <p>Awsome flts in mumbai</p>
      </div>
    </div>

    

    <div class="item">
      <img src="build5.jpeg" align="center "width="1000" height="1000"alt="Flower">
      <div class="carousel-caption">
        <h3>Nerul</h3>
        <p>Awsome flts in Nerul</p>
      </div>
    </div>

    <div class="item">
      <img src="baba.jpg" alt="buiding">
      <div class="carousel-caption">
        <h3>Kharghar</h3>
        <p>Flats in kharghar </p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  </div>
 </div>
</footer>

</body>
</html>

