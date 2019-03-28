<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes . '/commons/header') ?>
<?php $this->load->view($folder_themes . '/commons/nav') ?>

<section id="main-content">
	<main>
		<div class="container">
			<div class="col-12 px-0">
				<div class="row m-0 justify-content-between">
					<div class="col-lg-8 bg-white justify-content-start">
						<h2 class="judul-artikel">
							<?= $single_artikel['judul'] ?>
						</h2>
						<div class="posting">
							<div class="meta-berita">
								<span>
									<i class="fa fa-calendar-alt"></i>
									<?= tgl_indo($single_artikel['tgl_upload']) ?>
								</span>
								<span>
									<i class="fa fa-user"></i>
									<?= $single_artikel['owner'] ?>
								</span>
								<?php if($single_artikel['kategori']) : ?>
									<span>
										<i class="fa fa-tag"></i>
										<?= $single_artikel['kategori'] ?>
									</span>
								<?php endif ?>
							</div>
							<?php if($single_artikel['gambar'] != '' && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$single_artikel['gambar'])) : ?>
							<figure class="foto-artikel">
								<img src="<?= AmbilFotoArtikel($single_artikel['gambar'], 'sedang') ?>" alt="<?= $single_artikel['judul'] ?>" class="img-fluid">
							</figure>
							<?php endif ?>
							<article>
								<?= $single_artikel['isi'] ?>
							</article>	
						</div>
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
