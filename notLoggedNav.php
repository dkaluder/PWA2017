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
					<li <?php echo ($page == 'login') ? "class='active'" : ""; ?>><a href="login.php">Login</a></li>
					<li <?php echo ($page == 'signup') ? "class='active'" : ""; ?>><a href="signup.php">Signup</a></li>
					<li <?php echo ($page == 'fpass') ? "class='active'" : ""; ?>><a href="fpass.php" >Forgot Password</a></li>
					<li <?php echo ($page == 'proizvodi') ? "class='active'" : ""; ?>><a href="proizvodi.php" >Proizvodi</a></li>
				</ul>
			</div>
		</div>
	</nav>