<?php 
	$title="IT & Design | Contacto";
	$page="contacto";
	$headline='Contacto';
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
				<div class="span8">					
						<h4>Comentanos tu proyecto</h4>
						<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">

						<div id="sendmessage">
							¡Tu mensaje ha sido enviado!
						</div>
						<div class="row">
							<div class="span4 field">
								<input type="text" name="name" placeholder="* Nombre completo" data-rule="maxlen:4" data-msg="Please enter at least 4 chars"  />	
								<div class="validation"></div>
							</div>						
							<div class="span4 field">
									<input type="text" name="email" placeholder="* Email" data-rule="email" data-msg="Please enter a valid email"  />
									<div class="validation"></div>
							</div>
							<div class="span8 margintop10 field">
									<input type="text" name="subject" placeholder="Asunto" data-rule="maxlen:4" data-msg="Please enter at least 4 chars"  />
									<div class="validation"></div>
							</div>							
							<div class="span8 margintop10 field">
								<textarea rows="12" name="message" class="input-block-level" placeholder="* Mensaje" data-rule="required" data-msg="Please write something" ></textarea>
									<div class="validation"></div>

								<p>
									<button class="btn btn-theme btn-medium margintop10 pull-left" type="submit">Enviar</button>
									<span class="pull-right margintop20">* Campos requeridos</span>
								</p>
							</div>						
						</div>	
						</form>
				</div>
				<div class="span4">
					<div class="clearfix"></div>
					<aside class="right-sidebar">

						<div class="widget">
							<h5 class="widgetheading">Información de Contacto<span></span></h5>

							<ul class="contact-info">
									<li><label>Movil :</label><a href="tel:+56995128670">+56 9 95128670</a></li>
									<li><label>Email : </label><a href="mailto:contacto@itdesign.cl">contacto@itdesign.cl</a></li>
								</ul>

						</div>					
					</aside>
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