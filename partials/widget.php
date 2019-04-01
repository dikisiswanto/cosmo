<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="box">
	<form action="<?= site_url('first');?>" method="get" id="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Cari..." name="cari">
			<span class="input-group-append">
				<button class="btn btn-transparent" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</span>
		</div>
	</form>
</div>
<?php if($w_cos) : ?>
	<?php foreach($w_cos as $data) : ?>
		<?php if($data['jenis_widget'] == 1) : ?>
			<?php include("donjo-app/views/widgets/".trim($data['isi'])); ?>
			<?php elseif($data['jenis_widget'] == 2): ?>
				<?php include(LOKASI_WIDGET.trim($data['isi'])); ?>	
				<?php else : ?>
					<div class="box box-primary box-solid">
						<div class="box-header">
							<h3 class="box-title"><?= strip_tags($data['judul']) ?></h3>
						</div>
						<div class="box-body">
							<?= html_entity_decode($data['isi'])  ?>
						</div>
					</div>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>