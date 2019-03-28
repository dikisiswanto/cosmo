<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if(is_array($komentar) AND count($komentar['enabled'] == 1) > 0) : ?>
	<div class="py-2 pl-4 bg-light align-middle d-flex align-items-center" style="border-left: 3px solid orange">
		<h4 class="h5 font-weight-bold"><?= count($komentar['enabled'] == 1) ?> Komentar</h4>
	</div>
	<ul class="comment-section">
		<?php foreach($komentar as $data) : ?>
			<?php if($data['enabled'] == 1) : ?>
				<li class="comment user-comment">
					<div class="info">
							<a href="#!" title="<?= $data['owner'] ?>"><?= $data['owner'] ?></a>
							<span><?= tgl_indo($data['tgl_upload']); ?></span>
					</div>
					<span class="avatar">
							<i class="fa fa-user fa-lg p-2 rounded-circle bg-light"></i>
					</span>
					<p><?= $data['komentar'] ?></p>
				</li>
			<?php endif ?>
		<?php endforeach ?>
	</ul>
<?php endif ?>
