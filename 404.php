<?php 
	$title="IT & Design | 404";
	$page="404";
	$headline='404';
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

<?php include_once('template-section-headline.php'); ?>

	<section id="content">
		<div class="container">


			
			<div class="row">
				<div class="span12">
				<div class="aligncenter">
					<i class="icon-circled icon-bgwarning icon-remove icon-4x"></i> 
				</div>
				<div class="blankline30"></div>
				<h3 class="aligncenter">Lo siento, la página que buscas no fue encontrada</h3>
				<p class="aligncenter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
					</p>
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
    <script src="js/custom.js"></script>
    <!-- End Javascript-->
</body>
</html>