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
					<?php if($list_jawab): ?>
						<?php $this->load->view("$folder_themes/partials/statistics/analisis.php"); ?>
					<?php else : ?>
						<h2 class="text-heading text-lg lg:text-2xl border-b border-dotted border-primary dark:border-white pb-2">Daftar Agregasi Data Analisis Desa</h2>
						<?php foreach ($list_indikator AS $data): ?>
							<a href="<?= site_url("data_analisis/$data[id]/$data[subjek_tipe]/$data[id_periode]"); ?>"><h5>&nbsp;<b><?= $data['indikator']?></b></h5></a>
							<div class="table-responsive">
								<table>
									<tr>
										<td width="20%">Pendataan </td>
										<td width="1%"> :</td>
										<td><?= $data['master']; ?></td>
									</tr>
									<tr>
										<td>Subjek </td>
										<td> : </td>
										<td><?= $data['subjek']; ?></td>
									</tr>
									<tr>
										<td>Tahun </td>
										<td> :</td>
										<td><?= $data['tahun']; ?></td>
									</tr>
								</table>
							</div>
							<hr>
						<?php endforeach; ?>
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
