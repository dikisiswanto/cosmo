$(document).ready(function () {
	if ($('#jadwal-shalat').length) {

		const BASE_API_URL = 'https://api.banghasan.com/'; 
		const endpoint_nama_kota = `sholat/format/json/kota/kode/${KODE_KOTA}`;
		const endpoint_jadwal = `sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${TANGGAL}`;

		try {
			// get nama kota
			$.ajax({
				url: BASE_API_URL + endpoint_nama_kota,
				type: 'get',
				dataType: 'json',
				crossDomain: true,
				success: function (res) {
					$('[data-name=kota]').html(res.kota[0].nama).removeClass('shimmer line-short');
				},
				error: function (err) {
					$('.line-short').html(`<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>`);
					$('.line-short').removeClass('shimmer line-short');
				}
			});
	
			// get jadwal sholat
			$.ajax({
				url: BASE_API_URL + endpoint_jadwal,
				type: 'get',
				dataType: 'json',
				crossDomain: true,
				success: function (res) {
					$('.shimmer').removeClass('shimmer');
					$('[data-name=imsak]').html(`<span class="small">Imsak</span><span>${res.jadwal.data.imsak}</span>`);
					$('[data-name=subuh]').html(`<span class="small">Subuh</span><span>${res.jadwal.data.subuh}</span>`);
					$('[data-name=dzuhur]').html(`<span class="small">Dzuhur</span><span>${res.jadwal.data.dzuhur}</span>`);
					$('[data-name=ashar]').html(`<span class="small">Ashar</span><span>${res.jadwal.data.ashar}</span>`);
					$('[data-name=maghrib]').html(`<span class="small">Maghrib</span><span>${res.jadwal.data.maghrib}</span>`);
					$('[data-name=isya]').html(`<span class="small">Isya</span><span>${res.jadwal.data.isya}</span>`);
				},
				error: function (err) {
					$('.box-shalat').html(`<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>`);
					$('.box-shalat').removeClass('shimmer');
				}
			});
		} catch(err) {
			console.log(err);
		}
		
	}
})