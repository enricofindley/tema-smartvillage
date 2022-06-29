<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2 class="font-bold text-heading text-lg lg:text-2xl">Pembangunan</h2>
<div class="divider"></div>

<?php if ($pembangunan): ?>
	<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-2">
		<?php foreach ($pembangunan as $data): ?>
			<div class="flex justify-center text-3xl rounded-xl w-full pt-5 pb-5">
				<div class="card w-96 bg-base-100 shadow-xl">
					<?php if (is_file(LOKASI_GALERI . $data->foto)): ?>
						<img src="<?= base_url() . LOKASI_GALERI . $data->foto ?>" alt="Foto Pembangunan"/>
					<?php else: ?>
						<img src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" alt="Foto Pembangunan"/>
					<?php endif; ?>
					<div class="card-body">
						<div class="overflow-x-auto main-content">
							<table class="table table-compact w-full">
								<tbody>
									<tr>
									  <th>Nama Kegiatan</th>
									  <td>:</td>
									  <td><?= $data->judul ?></td>
									</tr>
									<tr>
									  <th>Alamat</th>
									  <td>:</td>
									  <td><?= ($data->alamat == "=== Lokasi Tidak Ditemukan ===") ? 'Lokasi tidak diketahui' : $data->alamat; ?></td>
									</tr>
									<tr>
									  <th>Tahun</th>
									  <td>:</td>
									  <td><?= $data->tahun_anggaran ?></td>
									</tr>
									<tr>
									  <th>Keterangan</th>
									  <td>:</td>
									  <td><?= $data->keterangan ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="card-actions justify-end">
							<a href="<?= site_url("pembangunan/detail/$data->id"); ?>" class="btn btn-primary">Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<?php $this->load->view("$folder_themes/commons/paging"); ?>
<?php else: ?>
	<h5>Data pembangunan tidak tersedia.</h5>
<?php endif;?>
