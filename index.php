<?php 
	$title="IT & Design | Soluciones Digitales";
	$page="home";
?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es">

<?php  include_once('template-head.php');?>

<body>
<div id="wrapper">	
	<!-- start header -->
<?php include_once('template-header.php'); ?>	
	<!-- end header -->
	
	<!-- section featured -->
	<section id="featured">
		<div id="shell" class="container">
			<img src="img/plax/jocelin.png" alt="">
			<img src="img/plax/table.png" data-xrange="20" data-yrange="20" alt="Table" id="plax-table">
			<img src="img/plax/pulgar.png" data-xrange="35" data-yrange="30" alt="Table" id="plax-moviles">
		</div>
	</section>
	<!-- section featured -->
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span4">
							<div class="box flyLeft">
								<div class="icon">
									<i class="ico icon-circled icon-bgdark icon-user active icon-3x"></i>
								</div>
								<div class="text">
									<h4><strong>Consultoría</strong></h4>
									<p>
									Te asesoramos y acompañamos a desarrollar tu proyecto.
									</p>
									<a href="#">&nbsp;</a>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="box flyIn">
								<div class="icon">
									<i class="ico icon-circled icon-bgdark icon-mobile-phone active icon-3x"></i>
								</div>
								<div class="text">
									<h4>Desarrollo <strong>Web</strong></h4>
									<p>
									Adaptamos tu web a todos los dispositivos móviles.
									</p>
									<a href="#">&nbsp;</a>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="box flyRight">
								<div class="icon">
									<i class="ico icon-circled icon-bgdark icon-laptop active icon-3x"></i>
								</div>
								<div class="text">
									<h4>Diseño <strong>Gráfico</strong></h4>
									<p>
									 Lideres en innovación digital.
									</p>
									<a href="#">&nbsp;</a>
								</div>
							</div>
						</div>

					</div>
				</div>	
			</div>
			<div class="row">
				<div class="span12">
					<div class="solidline"></div>
				</div>			
			</div>
			<div class="row">
				<div class="span6">
					<img src="img/lp/screen-1.png" alt="" class="flyLeft" />
				</div>
				<div class="span6">
					<div class="flyRight">
					<h4><strong><span class="colored">Retina ready</span> icons</strong></h4>
					<p>
					Lorem ipsum dolor sit amet, oporteat reformidans mei ut, sea simul intellegat ad. Accusata forensibus sed ne. Eu quas nemore aliquid eam. Lorem munere graeco ad eum.
					</p>
					<p>
					Est ne prima voluptatum, ea nam scripta invidunt petentium. Has ad summo aeterno maiorum. Partiendo scriptorem pri ad, pro choro sadipscing ne, ad usu tempor deleniti. Esse animal qualisque qui id. Sea habemus quaestio delicata an
					</p>
					<div class="blankline"></div>
					<i class="ico icon-circled icon-bgprimary icon-code icon-3x"></i>
					<i class="ico icon-circled icon-bgsuccess icon-beaker icon-3x"></i>
					<i class="ico icon-circled icon-bgwarning icon-rocket icon-3x"></i>
					<i class="ico icon-circled icon-bgdanger icon-cut icon-3x"></i>
					</div>
				</div>				
			</div>				
		</div>
	</section>

<?php include_once('template-footer.php'); ?>
</div>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>	

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include_once('template-js.php'); ?>
    <script src="js/plax.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/inview.js"></script>
    <!-- End Javascript-->
</body>
</html>