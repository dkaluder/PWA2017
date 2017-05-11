<!DOCTYPE HTML>
<html>
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
    /*Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
	</head>
	
	<body>
	<div class="jumbotron">
	<div class="container text-center">
    <h1>Prodaja rabljnih vozila</h1>      
    <p>Automobili, Motocikli, Oldtimeri, Kamperi & Kamioni</p>
	</div>
	</div>
	
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Početna</a></li>
        <li><a href="onama.php">O nama</a></li>
        <li><a href="unos.php">Unos</a></li>
        <li><a href="proizvodi.php">Proizvodi</a></li>
        <li><a href="administrator">Administrator</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>




	<?php
					include "database.php";
					$koliko = 0;
					$query = "SELECT * FROM oglas where arhiviraj = 'ne';";
					$result = sqlsrv_query($dbc, $query);
					
					while($row = sqlsrv_fetch_array($result)) {
					
					if($koliko%3 == 0){echo'<div class="container">    
							<div class="row">';}	
							
					echo '<div class="col-sm-4">
								<div class="panel panel-primary">
									<div class="panel-heading">'.$row['Naziv'].'</div>' ;
						
					echo '<div class="panel-body"><img src="Img/' . $row['URLSlike'] .'" class="img-responsive" style="width:100%" alt="Image"></div>' ;
					echo '<div class="panel-footer">'. $row['Cijena'] .' kn</div>';
					echo '</div> </div>';
					
					if($koliko%3 == 0){echo '</div></div><br>'; }
					$koliko++;
					}
					
					sqlsrv_close($dbc);
				?>


		
<br><br>
		
		<footer class="container-fluid text-center">
			<p>Dubravko Kaluđer Copyright</p>  
			<form class="form-inline">Get deals:
				<input type="email" class="form-control" size="50" placeholder="Email Address">
				<button type="button" class="btn btn-danger">Sign Up</button>
			 </form>
		</footer>
	</body>
</html>

