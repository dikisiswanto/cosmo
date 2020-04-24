<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php defined('JAKARTA', define('JAKARTA', 667)) ?>

<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/widget.min.css") ?>">
<script>
	const KODE_KOTA = "<?= config_item('kode_kota') ?: JAKARTA ?>";
	const TANGGAL = "<?= date('Y-m-d') ?>";  
</script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/widget.min.js") ?>"></script>

<section id="jadwal-shalat" class="py-4 bg-white">
	<div class="container">
		<p class="font-weight-bold text-muted line line-short shimmer" data-name="kota"></p>
		<div class="row">
			<div class="col-lg-2 col-4 px-2 py-1">
				<div class="box-shalat shimmer" data-name="imsak">
				</div>
			</div>
			<div class="col-lg-2 col-4 px-2 py-1">
				<div class="box-shalat shimmer"  data-name="subuh">
				</div>
			</div>
			<div class="col-lg-2 col-4 px-2 py-1">
				<div class="box-shalat shimmer" data-name="dzuhur">
				</div>
			</div>
			<div class="col-lg-2 col-4 px-2 py-1">
				<div class="box-shalat shimmer"  data-name="ashar">
				</div>
			</div>
			<div class="col-lg-2 col-4 px-2 py-1">
				<div class="box-shalat shimmer"  data-name="maghrib">
				</div>
			</div>
			<div class="col-lg-2 col-4 px-2 py-1">
				<div class="box-shalat shimmer"  data-name="isya">
				</div>
			</div>
		</div>
	</div>
</section>