	<header>	
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="span6">
						</div>
						<div class="span6">
								<ul class="social-network">
									<li><a href="https://www.facebook.com/itdesign.cl" target="_blank" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
									<li><a href="https://www.linkedin.com/company/it-&amp;-design" target="_blank" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
								</ul>
						</div>
					</div>
				</div>
			</div>	
		<div class="container">
			<div class="row nomargin">
				<div class="span4">
					<div class="logo">
						<a href="index.php"><img src="img/logo.png" alt="" /></a>
					</div>
				</div>
			<div class="span8">
				<div class="navbar navbar-static-top">
					<div class="navigation">
						<nav>
						<ul class="nav topnav">
							<li <?php if($page == 'consultoria') { echo 'class="dropdown active"'; }else{ echo 'class="dropdown"';} ?>>
								<a href="consultoria.php">Consultoría</a>
							</li>
							<li>
								<a href="#">Servicios <i class="icon-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li <?php if($page == 'web') { echo 'class="dropdown active"'; }else{ echo 'class="dropdown"';} ?>><a href="desarrollo_web.php">Desarrollo Web</a></li>
									<li <?php if($page == 'diseno') { echo 'class="dropdown active"'; }else{ echo 'class="dropdown"';} ?>><a href="diseno_grafico.php">Diseño Gráfico</a></li>
								</ul>
							</li>
							<li <?php if($page == 'precios') { echo 'class="dropdown active"'; }else{ echo 'class="dropdown"';} ?>>
								<a href="precios.php">Precios</a>
							</li>
							<li <?php if($page == 'portafolio') { echo 'class="dropdown active"'; }else{ echo 'class="dropdown"';} ?>>
								<a href="portafolio.php">Portafolio</a>
							</li>
							<li <?php if($page == 'contacto') { echo 'class="dropdown active"'; }else{ echo 'class="dropdown"';} ?>>
								<a href="contacto.php">Contacto </a>
							</li>
						</ul>
						</nav>
					</div>
					<!-- end navigation -->
				</div>
			</div>
			</div>
		</div>
	</header>