<?php
$output =null;

if (isset($_POST['submit2'])){
$mysqli =NEW MYSQLi("localhost","root","","photoz");
$search = $mysqli->real_escape_string($_POST['searcha']);
$searchb = $mysqli->real_escape_string($_POST['searchb']);
$searchc = $mysqli->real_escape_string($_POST['searchc']);
$searche = $mysqli->real_escape_string($_POST['searche']);
$resultSetd =$mysqli->query("SELECT * FROM flatemate WHERE city ='$search' and bhk='$searchb' and bathrooms='$searchc' and furniture='$searche'");

 
?>
 <?php 
 
     echo $output;?>
 
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
      <a class="navbar-brand" href="secondabhi.php#">ANTIbroker.COM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
     
	  <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Post your properties</a></li>
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
  <a href="http://localhost/photoz/buy.php" class="list-group-item">BUY</a>
  <a href="second" class="list-group-item ">SELL</a>
  <a href="http://localhost/photoz/rent.php" class="list-group-item ">RENT</a>
  <a href="#" class="list-group-item ">FLATEMATES</a>
</div>
    </div>
   <div class="col-sm-8 text-left">
   <div class="container">
  <h2>Flats</h2>
  <p>Find a home without a broker (Flatemmates)</p>
 <?php if($resultSetd->num_rows > 0)
 while($row1 =mysqli_fetch_array($resultSetd, MYSQLI_ASSOC))
	 
	 {
		 
		 $city =$row1['city'];
		  $squarefit =$row1['squarefit'];
		   $rent =$row1['rent'];
		   
			 $bhk =$row1['bhk'];
			  $furniture =$row1['furniture'];
			  $bathrooms =$row1['bathrooms'];
			  $address =$row1['address'];
				$noofroommate =$row1['noofroommate'];
				$parking =$row1['parking'];
				$contact =$row1['contact'];
	 
	 
	 }	
	 
 else{
		$output="no result"; 
 }
 
 }?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>City</th>
        <th>Square Feets</th>
        <th>Rent (INR)</th>
		
		<th>BHK</th>
		<th>Type</th>
		<th>Bathrooms</th>
		<th>Address</th>
		<th>Roommates</th>
		<th>Parking</th>
		<th>Contact number</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $city?></td>
        <td><?php echo $squarefit?></td>
        <td><?php echo $rent?></td>
		
		<td><?php echo $bhk?></td>
		<td><?php echo $furniture?></td>
		<td><?php echo $bathrooms?></td>
		<td><?php echo $address?></td>
		<td><?php echo $noofroommate?></td>
		<td><?php echo $parking?></td>
		<td><?php echo $contact?></td>
      </tr>
      
	  
    </tbody>
  </table>
</div>
    </div>
   
  </div>

 

<footer class="container-fluid text-center">
  
</footer>

</body>
</html>

<?php echo $output; ?>


