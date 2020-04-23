<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes . '/commons/meta') ?>
	<?php $this->load->view($folder_themes . '/commons/source_css') ?>
	<?php $this->load->view($folder_themes . '/commons/source_js') ?>
</head>
<body>
	<div id="loader">
		<div class="folding-cube">
			<div class="sk-cube1 cube"></div>
			<div class="cube2 cube"></div>
			<div class="cube4 cube"></div>
			<div class="cube3 cube"></div>
		</div>
	</div>
	<?php $modul = array(1,2,3,4) ?>
	<?php if(in_array($m, $modul)) : ?>
		<?php $this->load->view($folder_themes . '/partials/mandiri/mandiri_layout') ?>
		<?php else : ?>
		<?php $this->load->view($folder_themes . '/commons/404') ?>
	<?php endif ?>
</body>
</html>