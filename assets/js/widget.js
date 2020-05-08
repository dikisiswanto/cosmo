const regions = {
	indonesia: {
		id: 1,
		attributes: {
			wilayah: 'name',
			positif: 'jumlahKasus',
			meninggal: 'meninggal',
			sembuh: 'sembuh'
		}
	},
	provinsi: {
		id: 2,
		attributes: {
			wilayah: 'provinsi',
			positif: 'kasusPosi',
			meninggal: 'kasusMeni',
			sembuh: 'kasusSemb'
		}
	}
}

function numberFormat(num) {
	return new Intl.NumberFormat('id-ID').format(num);
}

function parseToNum(data) {
	return parseFloat(data.toString().replace(/,/g, ''));
}

function showCovidData(data, region) {
	const elem = region.id === regions.indonesia.id ? '#covid-nasional' : '#covid-provinsi';
	Object.keys(region.attributes).forEach(function (prop) {
		let tempData = data[region.attributes[prop]];
		let finalData = prop === 'wilayah' ? tempData.toUpperCase() : numberFormat(parseToNum(tempData));
		$(elem).find(`[data-name=${prop}]`).html(`${finalData}`);
	});

	$(elem).find('.shimmer').removeClass('shimmer');
}

function showError(elem = '') {
	$(`${elem} .shimmer`).html('<span class="small"><i class="fa fa-exclamation-triangle"></i> Gagal memuat...</span>');
	$(`${elem} .shimmer`).removeClass('shimmer');
}

$(document).ready(function () {
	if ($('#jadwal-shalat').length) {

		const SHALAT_API_URL = 'https://api.banghasan.com/';
		const ENDPOINT_KOTA = `sholat/format/json/kota/kode/${KODE_KOTA}`;
		const ENDPOINT_JADWAL = `sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${TANGGAL}`;

		try {
			$.ajax({
				async: true,
				cache: true,
				url: SHALAT_API_URL + ENDPOINT_KOTA,
				success: function (res) {
					$('[data-name=kota]').html(res.kota[0].nama).removeClass('shimmer line-short');
				},
				error: function (err) {
					showError('#jadwal-shalat');
				}
			});

			$.ajax({
				url: SHALAT_API_URL + ENDPOINT_JADWAL,
				async: true,
				cache: true,
				success: function (res) {
					$('#jadwal-shalat .shimmer').removeClass('shimmer');
					const attrs = ['imsak', 'subuh', 'dzuhur', 'ashar', 'maghrib', 'isya'];
					attrs.forEach(function (val) {
						$(`[data-name=${val}]`).html(`<span class="small">${val}</span><span>${res.jadwal.data[val]}</span>`);
					})
				},
				error: function (err) {
					showError('#jadwal-shalat');
				}
			});
		} catch (err) {
			showError('#jadwal-shalat');
		}

	}

	if ($('#covid-nasional').length) {
		const COVID_API_URL = 'https://indonesia-covid-19.mathdro.id/api/';
		const ENDPOINT_PROVINSI = 'provinsi';

		try {
			$.ajax({
				async: true,
				cache: true,
				url: COVID_API_URL,
				success: function (response) {
					const data = response;
					data.name = 'Indonesia';
					showCovidData(data, regions.indonesia);
				},
				error: function (error) {
					showError('#covid-nasional');
				}
			})
		} catch (error) {
			showError('#covid-nasional');
		}

		if (KODE_PROVINSI) {
			try {
				$.ajax({
					async: true,
					cache: true,
					url: COVID_API_URL + ENDPOINT_PROVINSI,
					success: function (response) {
						const data = response.data.filter(data => data.kodeProvi == KODE_PROVINSI);
						data.length ? showCovidData(data[0], regions.provinsi) : showError('#covid-provinsi');
					},
					error: function (error) {
						showError('#covid-provinsi');
					}
				})
			} catch (error) {
				showError('#covid-provinsi')
			}
		}

	}
})