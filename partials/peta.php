<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes . '/commons/header') ?>
<?php $this->load->view($folder_themes . '/commons/nav') ?>

<section id="main-content">
	<main>
		<div class="container">
						<?php $this->load->view($halaman_peta); ?>
		</div>
	</main>
</section>
<?php $this->load->view($folder_themes .'/commons/footer') ?>
