<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $bg = array('bg-danger', 'bg-warning', 'bg-success') ?>
<aside id="apdes" class="px-0">
	<div class="container">
		<div class="col-12 px-0">
			<div class="row widget mx-auto justify-content-center">
				<?php foreach($data_widget as $subdata_name => $subdatas) : ?>
				<div class="col-lg-4 px-1 px-lg-3">
					<div class="box bg-white">
						<div class="box-header">
							<h3 class="box-title <?= $bg[rand(0, 2)] ?>"><?= ($subdatas['laporan'])?></h3>
						</div>
						<div class="box-body my-4">
							<?php foreach($subdatas as $key => $subdata) : ?>
								<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>	
									<div class="item-apdes mb-2">
										<span class="small font-weight-bold"><?= $subdata['judul'] ?></span>
										<div class="d-flex justify-content-between w-100 pb-2 small">
											<span>Rp<?= number_format($subdata['anggaran']); ?></span><span>Rp<?= number_format($subdata['realisasi']); ?></span>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-striped bg-success progress-bar-animated" style="width:<?= $subdata['persen'] ?>%" aria-valuenow="<?= $subdata['persen'] ?>" aria-valuemin="0" aria-valuemax="100">
												<span><?= $subdata['persen'] ?> %</span>
											</div>
										</div>
									</div>
								<?php endif ?>
							<?php endforeach ?>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</aside>
