<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes .'/commons/meta') ?>
	<?php $this->load->view($folder_themes .'/commons/source_css') ?>
	<?php $this->load->view($folder_themes .'/commons/source_js') ?>
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
	<?php if($this->uri->segment(2) == 'kategori' && empty($judul_kategori)) : ?>
		<?php $this->load->view($folder_themes .'/commons/404') ?>
		<?php else : ?>
			<?php $this->load->view($folder_themes .'/commons/header') ?>
			<?php $this->load->view($folder_themes .'/commons/nav') ?>
			<?php $this->load->view($folder_themes .'/partials/content') ?>
			<?php $this->load->view($folder_themes .'/commons/footer') ?>
	<?php endif ?>
</body>
</html>