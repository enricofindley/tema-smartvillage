<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php	$favicon = LOKASI_LOGO_DESA . 'favicon.ico'; ?>
	<link rel="shortcut icon" href="<?= base_url(is_file($favicon) ? $favicon : 'favicon.ico') ?>"/>
	<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/peta/css/bootstrap.min.css"); ?>">

	<link rel='stylesheet' href="<?= base_url('assets/css/font-awesome.min.css'); ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/leaflet.css'); ?>"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/mapbox-gl.css'); ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/peta.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/dataTables.bootstrap.min.css'); ?>">

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ if (window.scrollY == 0) window.scrollTo(0,1); } </script>
	<script language='javascript' src="<?= base_url('assets/front/js/jquery.min.js'); ?>"></script>
	<script language='javascript' src="<?= base_url('assets/front/js/jquery.cycle2.min.js'); ?>"></script>
	<script language='javascript' src="<?= base_url('assets/front/js/jquery.cycle2.carousel.js'); ?>"></script>
	<script src="<?= base_url("$this->theme_folder/$this->theme/assets/peta/js/bootstrap.min.js"); ?>"></script>
	<script src="<?= base_url('assets/js/leaflet.js'); ?>"></script>
	<script src="<?= base_url('assets/front/js/layout.js'); ?>"></script>
	<script src="<?= base_url('assets/front/js/jquery.colorbox.js'); ?>"></script>
	<script src="<?= base_url('assets/js/leaflet-providers.js'); ?>"></script>
	<script src="<?= base_url('assets/js/highcharts/highcharts.js'); ?>"></script>
	<script src="<?= base_url('assets/js/highcharts/highcharts-3d.js'); ?>"></script>
	<script src="<?= base_url('assets/js/highcharts/exporting.js'); ?>"></script>
	<script src="<?= base_url('assets/js/highcharts/highcharts-more.js'); ?>"></script>
	<script src="<?= base_url('assets/js/highcharts/sankey.js'); ?>"></script>
	<script src="<?= base_url('assets/js/highcharts/organization.js'); ?>"></script>
	<script src="<?= base_url('assets/js/highcharts/accessibility.js'); ?>"></script>
	<script src="<?= base_url('assets/js/mapbox-gl.js'); ?>"></script>
	<script src="<?= base_url('assets/js/leaflet-mapbox-gl.js'); ?>"></script>
	<script src="<?= base_url('assets/js/peta.js'); ?>"></script>
	<script src="<?= base_url() ?>assets/bootstrap/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/bootstrap/js/dataTables.bootstrap.min.js"></script>
	<?php $this->load->view('head_tags_front') ?>
</head>

<body>
	<div style=" display: table; margin: 0 auto;">
		<div style="width:100%;">
			<h2 class="">Peta <?= ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h2>
			<a style="margin-left: 15%" href="<?= site_url() ?>" class="btn btn-danger">Kembali ke Beranda</a>
		</div>
	</div>
	<div style="margin-top:5%;" class="container">
		<?php $this->load->view($halaman_peta) ?>
	</div>
  <?php $this->load->view('head_tags_front') ?>
</body>

</html>
