<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<h2 class="content__heading">Data Kelompok - <?= $detail['nama']; ?></h2>
<hr class="--mt-2 --mb-2">

<h3 class="content__title --mt-4 --mb-2">Rincian & Pengurus</h3>
<div class="table-responsive">
  <table class="w-full text-sm">
    <tbody>
      <tr>
        <td width="20%">Nama Kelompok</td>
        <td width="1"> : </td>
        <td><?= $detail['nama']?></td>
      </tr>
      <tr>
        <td>Ketua Kelompok</td>
        <td> : </td>
        <td><?= $detail['nama_ketua']?></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td> : </td>
        <td><?= $detail['keterangan']?></td>
      </tr>
    </tbody>
  </table>
</div>

<h3 class="content__title --mt-4 --mb-2">Daftar Anggota</h3>
<div class="table-responsive">
  <table class="w-full text-sm">
    <thead>
      <tr>
        <th>No</th>
        <th>No. Anggota</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($anggota as $key => $data): ?>
      <tr>
        <td><?= $key + 1?></td>
        <td><?= $data['no_anggota'] ?:'-'?></td>
        <td nowrap><?= $data['nama']?></td>
        <td><?= $data['alamat']?></td>
        <td><?= ($data['sex'] == 1) ? 'LAKI-LAKI' : 'PEREMPUAN'?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>