<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if($teks_berjalan) : ?>
  <div class="newsticker" style="padding-bottom: 0">
    <div class="newsticker__label">
      <i class="fa fa-bullhorn"></i>
      <span>Info</span>
    </div>
    <marquee class="newsticker__lists" onmouseover="this.stop();" onmouseout="this.start();">
      <?php foreach($teks_berjalan as $newsticker) : ?>
        <span class="newsticker__item" style="padding-right: 1.5rem">
          <?= $newsticker['teks'] ?>
          <?php if($newsticker['tautan']) : ?>
          <a href="<?= $newsticker['tautan'] ?>" class="newsticker__link"><?= $newsticker['judul_tautan']?></a>
          <?php endif ?>
        </span>
      <?php endforeach ?>
    </marquee>
  </div>
<?php endif ?>