<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="grid grid-flow-row auto-rows-max gap-5">
	<?php $title = (!empty($judul_kategori))? $judul_kategori : "Artikel Terkini" ?>
	<?php if (is_array($title)): ?>
		<?php foreach ($title as $item): ?>
			<?php $title= $item ?>
		<?php endforeach; ?>
	<?php endif; ?>
	<h2 class="font-bold"><?= $title ?></h2>

	<?php if ($artikel): ?>
		<?php foreach ($artikel as $data): ?>
			<?php $abstrak = potong_teks($data['isi'], 50) ?>
			<div class="overflow-x-hidden w-full">
				<table class="table w-full">
					<tbody>
					<!-- row 1 -->
					<tr class="hover">
						<td>
							<a href="<?= site_url('artikel/'.buat_slug($data))?>">
								<div class="flex items-center space-x-3">
									<div class="avatar">
										<div class="mask mask-squircle w-20 h-20">
											<?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_".$data['gambar'])): ?>
												<img src="<?= AmbilFotoArtikel($data['gambar'],'sedang') ?>" width="100%" class="img-fluid img-thumbnail hidden-lg hidden-md" style="float:left; margin:0 8px 4px 0;" alt="<?= $data["judul"] ?>"/>
											<?php else: ?>
												<img src="<?= gambar_desa($desa['logo']);?>"  alt="<?= $desa['nama_desa']?>" class="mask max-w-sm rounded-lg shadow-2xl" />								<?php endif;?>
										</div>
									</div>
									<div>
										<div class="text-sm font-bold"><a href="<?= site_url('artikel/'.buat_slug($data))?>" class="link link-hover" title="Baca Selengkapnya"><?= $data["judul"] ?></a></div>
										<div class="text-sm opacity-50"><?= $abstrak ?> ...</div>
									</div>
								</div>
							</a>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
	<!-- Paging -->
	<?php $this->load->view("$folder_themes/commons/paging.php"); ?>
</div>
