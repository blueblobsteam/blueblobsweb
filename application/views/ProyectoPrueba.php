<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8" />

	<title>BlueBlobs - Stracomter III Project Page</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/layout.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap-responsive.css">
</head>
<body data-spy="scroll" data-target="#nav-project" data-offset="10">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><i class="icon-tint icon-white"></i>BlueBlobs</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>
						<li><a href="projects.html"><i class="icon-folder-open icon-white"></i> Projects</a></li>
						<li><a href="members.html"><i class="icon-user icon-white"></i> Members</a></li>
						<li><a href="#p2"><i class="icon-envelope icon-white"></i> Contact</a></li>
					</ul>
					<form class="navbar-search">
  						<input type="text" id="search-projects" class="search-query" placeholder="Search projects..." data-provide="typeahead">
					</form>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a data-target="#" href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-user icon-white"></i>
								Devs
							</a>
							<div class="dropdown-menu">
								<form name="dev-login" class="well" id="dev-login">
									<label>Login to enter the developers' area</label>
									<input type="text" name="dev-name" id="dev-name" placeholder="Developer..." />
									<input type="password" name="dev-pass" id="dev-pass" placeholder="Password..." />
									<button type="submit" class="btn btn-primary">Get in</button>
								</form>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<div id="nav-project" class="span3">
				<ul class="well nav nav-pills nav-stacked sidebar-nav-fixed">
					<li class="nav-header">
						<?php echo $proyecto->Titulo; ?>
					</li>
					<li class="active">
						<a class="fancy-scroll" href="#overview">Overview</a>
					</li>
					<li>
						<a class="fancy-scroll" href="#description">Description</a>
					</li>
					<li>
						<a class="fancy-scroll" href="#technologies">Technologies</a>
					</li>
					<li>
						<a class="fancy-scroll" href="#documentation">Documentation</a>
					</li>
					<li>
						<a class="fancy-scroll" href="#checkout">Checkout code</a>
					</li>
					<li>
						<a class="fancy-scroll" href="#members">Members</a>
					</li>
				</ul>
			</div> <!-- Navigation list (sidebar) -->

			<div class="span9">
				<section id="overview">
					<div class="page-header">
						<h1><?php echo $proyecto->Titulo; ?> <small><?php echo $proyecto->Descripcion_corta; ?></small></h1>
					</div>
					<div id="myCarousel" class="carousel slide">
					  <!-- Carousel items -->
					  <div class="carousel-inner">
					    <!--<div class="active item">
					    	<img src="../../public/img/stracomter3/p2.jpg" width="920" height="500"/>
					    	 <div class="carousel-caption">

							  <h4>Menu</h4>
							  <p>Menu inicial del stracomter 3</p>

							 </div>
					    </div>

					    <div class="item">
					    	<img src="../../public/img/stracomter3/p1.jpg" width="920" height="500"/>
					    	 <div class="carousel-caption">

							  <h4>Completado</h4>
							  <p>Pantalla de nivel completado</p>

							 </div>
					    </div>
					    <div class="item">
					    	<img src="../../public/img/stracomter3/p3.jpg" width="920" height="500"/>
					    	 <div class="carousel-caption">

							  <h4>Ingame</h4>
							  <p>Imagen del juego ingame</p>

							 </div>
					    </div>-->

					    <?php

					    $primera = true;
					    foreach ($fotos as $foto) {
							
							if($primera)
							{
								echo "<div class=\"active item\">";
								$primera = false;
							}
							else
							{
								echo "<div class=\"item\">";
							}

					    	echo "<img src=\"" . $foto->Fichero . "\" width=\"920\" height=\"500\"/>";
					    	echo "<div class=\"carousel-caption\">";

							echo "<h4>" . $foto->Titulo . "</h4>";
							echo "<p>" . $foto->Descripcion . "</p>";

							echo "</div>";
					    	echo "</div>";
						}

						?>

					  </div> <!-- Carousel list of items -->
					  <!-- Carousel nav -->
					  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>
				</section> <!-- Overview of project -->

				<section id="description">
					<div class="page-header">
						<h2>Description</h2>
					</div>
					<br>
					<strong>Descripcion del proyecto (propuesta y no se que mas...)</strong>
					<br>
					<?php echo $proyecto->Descripcion; ?>
				</section> <!-- Description of project -->

				<section id="technologies">
					<div class="page-header">
						<h2>Technologies</h2>
					</div>
					<br>
					<strong>Tecnologias usadas (C++, Node.js, pene de ruben, ...)</strong>
					<br>
					<?php

						foreach ($tecnologias as $tecnologia) {
							
							echo "<h3>Nombre</h3>";
							echo $tecnologia->Nombre;
							echo "<h3>Descripcion</h3>";
							echo $tecnologia->Descripcion;
							echo "<h3>Web</h3>";
							echo "<a>" . $tecnologia->Web . "</a>";
						}
						

					?>
				</section> <!-- Technologies used on project -->

				<section id="documentation">
					<div class="page-header">
						<h2>Documentation</h2>
					</div>
					<br>
					<strong>Documentación generada en la web durante el proyecto (articulos subidos durante su desarrollo)</strong>
					<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</section> <!-- Documentation of project -->

				<section id="checkout">
					<div class="page-header">
						<h2>Checkout the code</h2>
					</div>
					<br>
					<strong>Instrucciones para hacer un checkout del repo (svn co https://..../svn/stracomteriii)</strong>
					<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</section> <!-- Instructions for checkout the repo -->

				<section id="members">
					<div class="page-header">
						<h2>Members</h2>
					</div>
					<br>
					<strong>Miembros del proyecto (esteve, esteve, esteve y esteve)</strong>
					<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</section> <!-- Members of project -->

			</div><!-- Span9 (content of page) -->
		</div>

		<!-- Footer -->
		<hr>
		<footer>
			<p>BlueBlobs, 2012</p>
		</footer>
	</div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="../../public/js/bootstrap.js"></script>
	<script type="text/javascript" src="../../public/js/init.js"></script>
</body>
</html>