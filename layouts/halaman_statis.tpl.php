<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html id="theme" data-theme="" lang="en">
<head>
	<!-- Metadata -->
	<?php $this->load->view("$folder_themes/commons/meta.php"); ?>
	<!-- Source CSS -->
	<?php $this->load->view("$folder_themes/commons/source_css.php"); ?>
</head>
<body>
<!-- Header -->
<?php $this->load->view("$folder_themes/commons/header.php"); ?>

<!-- Content -->
<div class="container mx-auto px-10 ">
	<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-10">
		<!-- Artikel Terkini -->
		<div class="flex col-span-2 justify-center text-3xl rounded-xl  w-full pt-20 pb-20">
			<div class="container">
				<?php if ($halaman_statis === 'web/halaman_statis/informasi_publik'): ?>
					<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/informasi_publik.php'));?>
				<?php elseif ($halaman_statis === 'web/halaman_statis/peraturan_desa'): ?>
					<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/produk_hukum.php'));?>
				<?php else: ?>
					<?php $this->load->view($halaman_statis); ?>
				<?php endif; ?>
			</div>
		</div>
		<!-- Widget -->
		<div class="flex justify-center text-3xl rounded-xl w-full p-6 pt-20 pb-20">
			<?php $this->load->view("$folder_themes/partials/widget.php"); ?>
		</div>
	</div>
</div>
<!-- Footer -->
<?php $this->load->view("$folder_themes/commons/footer.php"); ?>
<?php $this->load->view("$folder_themes/partials/scroll_top.php"); ?>

<!-- Source JS -->
<?php $this->load->view($folder_themes .'/commons/source_js') ?>
</body>
</html>
