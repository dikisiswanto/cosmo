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
	<?php $this->load->view($folder_themes . '/commons/header') ?>
	<?php $this->load->view($folder_themes . '/commons/nav') ?>
	<?php $this->load->view($folder_themes . '/widgets/jadwal_shalat') ?>
	<section id="main-content">
		<main>
			<div class="container">
				<div class="col-12 px-0">
					<div class="row m-0 justify-content-between">
						<div class="col-lg-8 bg-white justify-content-start">
							<?php $this->load->view($folder_themes .'/partials/arsip') ?>
							<?php $this->load->view($folder_themes .'/commons/paging') ?>
						</div>
						<aside class="col-lg-4 justify-content-end">
							<div class="widget">
								<?= $this->load->view($folder_themes .'/partials/widget') ?>
							</div>	
						</aside>
					</div>
				</div>
			</div>
		</main>
	</section>
	<?= $this->load->view($folder_themes .'/commons/footer') ?>
</body>
</html>