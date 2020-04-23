<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/vendor.min.js") ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/vendor/datatable/datatables.min.js") ?>"></script>
<script src="<?= base_url('assets/js/highcharts/highcharts.js')?>"></script>
<script src="<?= base_url("assets/front/js/jquery.cycle2.min.js")?>"></script>
<script src="<?= base_url("assets/front/js/jquery.cycle2.carousel.js")?>"></script>
<script src="<?= base_url("assets/js/leaflet.js")?>"></script>
<script src="<?= base_url("assets/js/leaflet-providers.js")?>"></script>
<script defer src="<?= base_url("$this->theme_folder/$this->theme/assets/js/script.min.js") ?>"></script>
<script type="text/javascript">
	const BASE_URL = "<?= base_url(); ?>";
</script>
<?php $this->load->view('head_tags_front') ?>
