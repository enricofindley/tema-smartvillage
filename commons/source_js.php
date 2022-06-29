<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script language='javascript' src="<?= base_url('assets/front/js/jquery.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/highcharts.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/highcharts-3d.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/modules/sankey.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/modules/organization.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/modules/accessibility.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
	let savedTheme = window.localStorage.getItem('savedTheme');
	document.getElementById("theme").setAttribute("data-theme", savedTheme);
	function ubahTema()
	{
		var e = document.getElementById("formTema");
		var value = e.options[e.selectedIndex].value;
		window.localStorage.setItem('savedTheme', value);
		document.getElementById("theme").setAttribute("data-theme", value);
	}
</script>
<script>
	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
	var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
	var zoom = <?=$data_config['zoom'] ?: 10?>;
	<?php else: ?>
	var posisi = [-1.0546279422758742,116.71875000000001];
	var zoom = 10;
	<?php endif; ?>

	var lokasi_kantor = L.map('map_canvas').setView(posisi, zoom);

	//Menampilkan BaseLayers Peta
	var baseLayers = getBaseLayers(lokasi_kantor, '<?= $this->setting->mapbox_key; ?>');

	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(lokasi_kantor);

	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
	var kantor_desa = L.marker(posisi).addTo(lokasi_kantor);
	<?php endif; ?>
</script>
<script>
	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
	var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
	var zoom = <?=$data_config['zoom'] ?: 10?>;
	<?php else: ?>
	var posisi = [-1.0546279422758742,116.71875000000001];
	var zoom = 10;
	<?php endif; ?>
	//Style polygon
	var style_polygon = {
		stroke: true,
		color: '#FF0000',
		opacity: 1,
		weight: 2,
		fillColor: '#8888dd',
		fillOpacity: 0.5
	};
	var wilayah_desa = L.map('map_wilayah').setView(posisi, zoom);

	//Menampilkan BaseLayers Peta
	var baseLayers = getBaseLayers(wilayah_desa, '<?= $this->setting->mapbox_key; ?>');

	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(wilayah_desa);

	<?php if (!empty($data_config['path'])): ?>
	var polygon_desa = <?= $data_config['path']; ?>;
	var kantor_desa = L.polygon(polygon_desa, style_polygon).bindTooltip("Wilayah Desa").addTo(wilayah_desa);
	wilayah_desa.fitBounds(kantor_desa.getBounds());
	<?php endif; ?>
</script>
<script type="text/javascript">
	$(function () {
		var chart_widget;
		$(document).ready(function () {
			// Build the chart
			chart_widget = new Highcharts.Chart({
				chart: {
					renderTo: 'container_widget',
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false
				},
				title: {
					text: 'Jumlah Penduduk'
				},
				yAxis: {
					title: {
						text: 'Jumlah'
					}
				},
				xAxis: {
					categories:
						[
							<?php foreach($stat_widget as $data): ?>
							<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
							['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
							<?php endif; ?>
							<?php endforeach; ?>
						]
				},
				legend: {
					enabled:false
				},
				plotOptions: {
					series: {
						colorByPoint: true
					},
					column: {
						pointPadding: 0,
						borderWidth: 0
					}
				},
				series: [{
					type: 'column',
					name: 'Populasi',
					data: [
						<?php foreach ($stat_widget as $data): ?>
						<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
						['<?= $data['nama']?>',<?= $data['jumlah']?>],
						<?php endif; ?>
						<?php endforeach; ?>
					]
				}]
			});
		});

	});
</script>
<script>
	function tab_Arsip() {
		return {
			activeTab: 0,
			tabs: [
				"Terkini",
				"Populer",
				"Acak",
			]
		};
	};

	function tab_Agenda() {
		return {
			activeTab: 0,
			tabs: [
				"Hari Ini",
				"Mendatang",
				"Lama",
			]
		};
	};
</script>
<script>
	var swiper = new Swiper(".swiperUtama", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		scrollbar: {
			el: ".swiper-scrollbar",
			hide: true,
		},
	});

	var swiperAparatur = new Swiper(".swiperAparatur", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		pagination: {
			el: ".swiper-pagination",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	var swiperGaleri = new Swiper(".swiperGaleri", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	var swiperSinergi = new Swiper(".swiperSinergi", {
		slidesPerView: 2,
		spaceBetween: 1,
		loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>
<?php $this->load->view('head_tags_front') ?>
