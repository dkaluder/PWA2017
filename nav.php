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
        <li><a href="index.php"<?php echo ($page == 'pocetna') ? "class='active'" : ""; ?>>Početna</a></li>
        <li><a href="onama.php"<?php echo ($page == 'onama') ? "class='active'" : ""; ?>>O nama</a></li>
        <li><a href="unos.php" <?php echo ($page == 'unos') ? "class='active'" : ""; ?>>Unos</a></li>
        <li><a href="proizvodi.php" <?php echo ($page == 'proizvodi') ? "class='active'" : ""; ?>>Proizvodi</a></li>
        <li><a href="administrator" <?php echo ($page == 'administrator') ? "class='active'" : ""; ?>>Administrator</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>