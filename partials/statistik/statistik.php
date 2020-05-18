<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script type="text/javascript">
	let chart;
	const raw = Object.values(<?= json_encode($stat) ?>);
	let chartType = 'pie';
	const legend = Boolean(!<?= ($tipe) ?>);
	const categories = [];
	const data = [];
	let showStatus = true;
	for (const stat of raw) {
		if (stat.nama !== 'TOTAL' && stat.nama !== 'JUMLAH' && stat.nama != 'PENERIMA') {
			let filteredData = [stat.nama, parseInt(stat.jumlah)];
			categories.push(stat.nama);
			data.push(filteredData);
		}
	}

	function showZeroValue(show = false) {
		if (show) {
			$(".nol").parent().show();
		} else {
			$(".nol").parent().hide();
		}
	}

	function showHideToggle() {
		$('#showData').click();
		showZeroValue(showStatus);
		showStatus = !showStatus;
		if (showStatus) $('#tampilkan').text('Tampilkan Nol');
		else $('#tampilkan').text('Sembunyikan Nol');
	}

	function switchType(type){
		chart.series[0].update({
			type: type
		});
	}

	$(document).ready(function () {
		showZeroValue(false);
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'container'
			},
			title: 0,
			yAxis: {
				showEmpty: false,
				title: {
					text: 'Jumlah Populasi'
				}
			},
			xAxis: {
				categories: categories,
			},
			plotOptions: {
				series: {
					colorByPoint: true
				},
				column: {
					pointPadding: -0.1,
					borderWidth: 0,
					showInLegend: false
				},
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					showInLegend: true
				}
			},
			legend: {
				enabled: legend
			},
			series: [{
				type: chartType,
				name: 'Jumlah Populasi',
				shadow: 1,
				border: 1,
				data: data
			}]
		});

		$('#showData').click(function () {
			$('tr.lebih').show();
			$('#showData').hide();
			showZeroValue(false);
		});

		$('.btn-switch').click(function () {
			chartType = $(this).data('type');
			$(this).addClass('btn-primary');
			$(this).removeClass('btn-default')
			$(this).siblings('.btn').removeClass('btn-primary');
			$(this).siblings('.btn').addClass('btn-default');
			switchType(chartType);
		})

	});
</script>

<div class="stat">
	<h2 class="judul-artikel">Demografi Berdasar <?= $heading ?></h2>
	<div class="col-12 px-0 mb-4 mt-3">
		<div class="row justify-content-between align-content-center">
			<div class="col-7">
				<h5 class="font-weight-bold">Grafik <?= $heading ?></h5>
			</div>
			<div class="col-5">
				<div class="box-stats d-flex justify-content-end">
					<div class="btn-group btn-group-sm">
						<button class="btn-switch btn btn-default btn-xs" data-type="column">Bar Graph</button>
						<button class="btn-switch btn btn-primary btn-xs" data-type="pie">Pie Chart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div id="container"></div>
		<div id="contentpane">
			<div class="ui-layout-north panel top"></div>
		</div>
	</div>

	<h5 class="font-weight-bold mt-4">
		Tabel <?= $heading ?>
	</h5>
	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th rowspan="2" class="align-middle">No</th>
					<th rowspan="2" class="align-middle">Kelompok</th>
					<th colspan="2" class="text-center">Jumlah</th>
					<?php if($jenis_laporan == 'penduduk'): ?>
						<th colspan="2" class="text-center">Laki-laki</th>
						<th colspan="2" class="text-center">Perempuan</th>
					<?php endif; ?>
				</tr>
				<tr>
					<th class="text-right">n</th>
					<th class="text-right">%</th>
					<?php if($jenis_laporan == 'penduduk'):?>
						<th class="text-right">n</th>
						<th class="text-right">%</th>
						<th class="text-right">n</th>
						<th class="text-right">%</th>
					<?php endif ?>
				</tr>
			</thead>
			<tbody>
				<?php $i=0; $l=0; $p=0; $hide=""; $h=0; $jm1=1; $jm = count($stat);?>
				<?php foreach ($stat as $data):?>
					<?php $jm1++; if (1):?>
					<?php $h++; if ($h > 12 AND $jm > 10): $hide="lebih"; ?>
					<?php endif;?>
					<tr class="<?=$hide?>">
						<td class="angka">
							<?php if ($jm1 > $jm - 2):?>
								<?=$data['no']?>
							<?php else:?>
								<?=$h?>
							<?php endif;?>
						</td>
						<td><?=$data['nama']?></td>
						<td class="angka <?php ($jm1 <= $jm - 2) and ($data['jumlah'] == 0) and print('nol')?>"><?=$data['jumlah']?>
						</td>
						<td class="angka"><?=$data['persen']?></td>
						<?php if ($jenis_laporan == 'penduduk'):?>
							<td class="angka"><?=$data['laki']?></td>
							<td class="angka"><?=$data['persen1']?></td>
							<td class="angka"><?=$data['perempuan']?></td>
							<td class="angka"><?=$data['persen2']?></td>
						<?php endif;?>
					</tr>
					<?php $i += $data['jumlah'];?>
					<?php $l += $data['laki']; $p += $data['perempuan'];?>
					<?php endif;?>
				<?php endforeach;?>
			</tbody>
		</table>

		<div class="d-flex justify-content-start mb-2">
			<?php if($hide == "lebih") : ?>
			<button class='btn btn-sm btn-success mr-3' id='showData'>Selengkapnya...</button>
			<?php endif ?>
			<button id='tampilkan' onclick="showHideToggle();" class="btn btn-sm btn-success">Tampilkan Nol</button>
		</div>
	</div>

	<?php if (in_array($st, array('bantuan_keluarga', 'bantuan_penduduk'))):?>
		<h5 class="font-weight-bold mt-4">
			Daftar <?= $heading ?>
		</h5>
		<input id="stat" type="hidden" value="<?=$st?>">
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="peserta_program">
				<thead>
					<tr>
						<th>No</th>
						<th>Program</th>
						<th>Nama Peserta</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tfoot>
				</tfoot>
			</table>
		</div>

		<script type="text/javascript">
			$(document).ready(function () {

				const url = "<?= site_url('first/ajax_peserta_program_bantuan')?>";
				table = $('#peserta_program').DataTable({
					'processing': true,
					'serverSide': true,
					"pageLength": 10,
					'order': [],
					"ajax": {
						"url": url,
						"type": "POST",
						"data": {
							stat: $('#stat').val()
						}
					},
					//Set column definition initialisation properties.
					"columnDefs": [{
						"targets": [0, 3], //first column / numbering column
						"orderable": false, //set not orderable
					}, ],
					'language': {
						'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
					},
					'drawCallback': function () {
						$('.dataTables_paginate > .pagination').addClass('pagination-sm no-margin');
					}
				});

			});
		</script>
	<?php endif;?>
</div>
