<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="teks-berjalan marquee-container">
	<div class="container">
		<?php if($teks_berjalan) : ?>
			<div class="teks-wrapper">
				<span>INFO</span>
			</div>
			<ul class="marquee" id="marquee">
				<li>
					<?= $teks_berjalan ?>
				</li>
			</ul>
		<?php endif ?>
	</div>
</div>