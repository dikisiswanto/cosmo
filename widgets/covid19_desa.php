<section id="covid-desa" class="py-4 bg-white">
	<p class="font-weight-bold text-muted m-0 mb-2" data-name="wilayah">
		<?= strtoupper($this->setting->sebutan_desa . ' ' . $desa['nama_desa']); ?></p>
	<div class="row">
		<div class="col-lg-6 col-12 px-2 py-1">
			<div class="square covid mb-lg-3 positif">
				<span>Positif</span>
				<span data-name="positif"><?= number_format($positif['jumlah']) ?></span>
				<span class="small">orang</span>
			</div>
		</div>
		<div class="col-lg-6 col-12 px-2 py-1">
			<div class="square covid mb-lg-3 pdp">
				<span>PDP</span>
				<span data-name="pdp"><?= number_format($pdp['jumlah']) ?></span>
				<span class="small">orang</span>
			</div>
		</div>
		<div class="col-lg-6 col-12 px-2 py-1">
			<div class="square covid mb-lg-3 odp">
				<span>ODP</span>
				<span data-name="odp"><?= number_format($odp['jumlah']) ?></span>
				<span class="small">orang</span>
			</div>
		</div>
		<div class="col-lg-6 col-12 px-2 py-1">
			<div class="square covid mb-lg-3 odr">
				<span>ODR</span>
				<span data-name="odr"><?= number_format($odr['jumlah']) ?></span>
				<span class="small">orang</span>
			</div>
		</div>
	</div>
</section>