<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<header>
	<div class="top-header d-lg-block d-none">
		<div class="container">
			<div class="social-link justify-content-start">
				<ul>
					<?php foreach ($sosmed As $data): ?>
						<?php if (!empty($data["link"])): ?>
							<li>
								<a href="<?= $data['link']?>" target="_blank"><i class="fab fa-<?= strtolower(str_replace(' ', '-', $data['nama']))?>"></i></a>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="meta-desa justify-content-end">
				<ul>
					<?php if($desa['alamat_kantor']) : ?>
						<li>
							<span><i class="fa fa-map-marker-alt"></i></span>
							<span><?= $desa['alamat_kantor'] ?></span>
						</li>
					<?php endif ?>
					<?php if($desa['telepon']) : ?>
						<li>
							<span><i class="fa fa-phone"></i></span>
							<span><?= $desa['telepon'] ?></span>
						</li>
					<?php endif ?>
					<?php if($desa['email_desa']) : ?>
						<li>
							<span><i class="fa fa-envelope"></i></span>
							<span><?= $desa['email_desa'] ?></span>
						</li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</div>
	<?php $this->load->view($folder_themes . '/partials/marquee'); ?>
	<div class="identitas-desa">
		<div class="container">
			<a href="<?= site_url('first'); ?>" class="brand">
				<div class="logo">
						<img src="<?= LogoDesa($desa['logo']) ?>" alt="<?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="img-fluid">
				</div>
				<div class="detail">
					<h1 class="h1">
						<span><?= strtoupper($this->setting->sebutan_desa) ?></span>
						<span><?= strtoupper($desa['nama_desa']); ?></span>
					</h1>
					<div class="ket">
						<span>
						<?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?>
						<?= ucwords($desa['nama_kecamatan']) ?>
						<?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
						<?= ucwords($desa['nama_kabupaten']) ?>
						</span>
						<?php  ?>
					</div>
				</div>
			</a>
		</div>
	</div>
</header>
