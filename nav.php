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
				<a class="navbar-brand" href="#"><img src="Img/logoCar.svg"  ></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li <?php echo ($page == 'index') ? "class='active'" : ""; ?>><a href="index.php">Početna</a></li>
					<li <?php echo ($page == 'unos') ? "class='active'" : ""; ?>><a href="unos.php" >Unos</a></li>
					<li <?php echo ($page == 'proizvodi') ? "class='active'" : ""; ?>><a href="proizvodi.php" >Proizvodi</a></li>
					<li <?php echo ($page == 'administrator') ? "class='active'" : ""; ?>><a href="administrator.php" >Administrator</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						  <a href="#" role="button" class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-user"> 
							<?php echo $row['userEmail']; ?>
							<i class="caret"></i>
						  </a>
						  
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<li><a class="dropdown-item " href="logout.php">Logout</a></li>
						  </ul>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>