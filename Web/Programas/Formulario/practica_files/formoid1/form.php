<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-dark" style="background-color:#FFFFFF;font-size:13px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#34495E;max-width:500px;min-width:150px" method="post"><div class="title"><h2>aplicaciones para la ciencia forense</h2></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title"></label><span class="nameFirst"><input placeholder=" Nombre" type="text" size="8" name="name[first]" /><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Apellido" type="text" size="14" name="name[last]" /><span class="icon-place"></span></span></div>
	<div class="element-date<?php frmd_add_class("date"); ?>"><label class="title"></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date" placeholder="Fecha"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="Sistema de I">Sistema de I</option>
		<option value="magen">magen</option>
		<option value="alpha300 RA para imagenes Raman-AFM combinadas">alpha300 RA para imagenes Raman-AFM combinadas</option>
		<option value="Microscopio alpha300R para imagenes Raman-Confocal">Microscopio alpha300R para imagenes Raman-Confocal</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title">Equipo forense</label>		<div class="column column3"><label><input type="checkbox" name="checkbox[]" value="fotografía"/ ><span>fotografía</span></label><label><input type="checkbox" name="checkbox[]" value="informatica"/ ><span>informatica</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="checkbox" name="checkbox[]" value="planimetría"/ ><span>planimetría</span></label><label><input type="checkbox" name="checkbox[]" value="quimica"/ ><span>quimica</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="checkbox" name="checkbox[]" value="balística"/ ><span>balística</span></label><label><input type="checkbox" name="checkbox[]" value="huello grafia"/ ><span>huello grafia</span></label></div><span class="clearfix"></span>
</div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-dark.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>