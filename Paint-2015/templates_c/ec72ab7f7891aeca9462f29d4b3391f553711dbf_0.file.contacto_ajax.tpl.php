<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-20 01:09:18
         compiled from "C:\xampp\htdocs\dany\k\Paint-2015\templates\contacto_ajax.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5625781e79ce55_75675657',
  'file_dependency' => 
  array (
    'ec72ab7f7891aeca9462f29d4b3391f553711dbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dany\\k\\Paint-2015\\templates\\contacto_ajax.tpl',
      1 => 1443470693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5625781e79ce55_75675657')) {
function content_5625781e79ce55_75675657 ($_smarty_tpl) {
?>
<div class="top-banner"></div>	
<div class="contact">
		<div class="container">
			<div class="contact-top">
				<h3>Contacto</h3>
			</div>
			<div class="contact-bottom">
				 <div class="contact-text">					
					<div class="col-md-9 contact-left">
						<form class="form-horizontal" id="contacto_ajax" method="POST">
							<div class="form-group row">
								<div class="col-md-4">
								<input type="text" name="name" class="form-control" placeholder="Su nombre *" id="name2" required data-validation-required-message="Please enter your name.">
								</div>
							
								<div class="col-md-4">
								<input type="email" name="email" class="form-control" placeholder="Su correo *" id="email" required data-validation-required-message="Please enter your email address.">
								</div>
							
								<div class="col-md-4">
								<input type="tel" name="telefono"class="form-control" placeholder="Su teléfono *" id="tel"  required data-validation-required-message="Please enter your phone number.">
								</div>

							</div>
							

							<textarea type="text" placeholder="Su mensaje *" id="mensaje" required data-validation-required-message="Por favor escriba su mensaje."></textarea>
	
							<div class="submit-btn">								
								<input type="submit" value="Enviar">							
							</div>
						</form>
					</div>
					<div class="col-md-3 contact-right">
						<div class="address">
							<h5>Direcci&oacute;n</h5>
							<p>Paint, 
							Costa Rica 146.</p>
						</div>
						<div class="address">
							<h5>Contacto</h5>
							<p>Tel: 0249-154-4494053, 
							<span>Fax: 190-4509-494</span>
							E-mail: <a href="mailto:example@email.com">paintdjd@gmail.com</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
			 </div>
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="800" height="443" src="https://maps.google.com/maps?hl=en&q=Costa Rica 146 - Tandil&ie=UTF8&t=m&z=15&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://premiumlinkgenerator.com">Premiumlinkgenerator.com</a></small></div></iframe>
		 </div>
	 </div>
</div>	<?php }
}
