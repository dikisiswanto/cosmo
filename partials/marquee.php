<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="teks-berjalan marquee-container">
	<div class="container">
		<?php if($teks_berjalan) : ?>
		<div class="teks-wrapper">
			<span>INFO</span>
		</div>
		<ul class="marquee" id="marquee">
			<?php foreach($teks_berjalan as $teks) : ?>
			<li>
				<?= $teks['teks']?>
				<?php if ($teks['tautan']): ?>
					<a href="<?=$teks['tautan']?>" target="_blank"><?=$teks['judul_tautan']?></a>
				<?php endif ?>
			</li>
			<?php endforeach ?>
		</ul>
		<?php endif ?>
	</div>
</div>
