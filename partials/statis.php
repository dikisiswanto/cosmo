<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes . '/commons/header') ?>
<?php $this->load->view($folder_themes . '/commons/nav') ?>
<?php $this->load->view($folder_themes . '/widgets/jadwal_shalat') ?>

<section id="main-content">
	<main>
		<div class="container">
			<div class="col-12 px-0">
				<div class="row m-0 justify-content-between">
					<div class="col-lg-8 bg-white justify-content-start">
						<?php $this->load->view($halaman_statis); ?>
					</div>
					<aside class="col-lg-4 justify-content-end">
						<div class="widget">
							<?php $this->load->view($folder_themes .'/partials/widget') ?>
						</div>	
					</aside>
				</div>
			</div>
		</div>
	</main>
</section>
<?php $this->load->view($folder_themes .'/commons/footer') ?>