<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h2 class="font-bold text-heading text-lg lg:text-2xl">Detail Pembangunan</h2>
<div class="divider"></div>

<h3 class="font-bold text-heading text-lg lg:text-2xl">Data Pembangunan</h3>
<br>

<?php if (is_file(LOKASI_GALERI . $pembangunan->foto)): ?>
	<img style="width:500px; height: 340px;" src="<?= base_url() . LOKASI_GALERI . $pembangunan->foto ?>" alt="Foto Pembangunan"/>
<?php else: ?>
	<img src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" alt="Foto Pembangunan"/>
<?php endif; ?>
<div class="">
	<table class="table table-compact w-full">
		<tr>
			<th>Nama Kegiatan</th>
			<td>:</td>
			<td><?= $pembangunan->judul ?></td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td>:</td>
			<td><?= $pembangunan->alamat ?></td>
		</tr>
		<tr>
			<th>Sumber Dana</th>
			<td>:</td>
			<td><?= $pembangunan->sumber_dana ?></td>
		</tr>
		<tr>
			<th>Anggaran</th>
			<td>:</td>
			<td>Rp. <?= number_format($pembangunan->anggaran,0) ?></td>
		</tr>
		<tr>
			<th>Volume</th>
			<td>:</td>
			<td><?= $pembangunan->volume?></td>
		</tr>
		<tr>
			<th>Pelaksana</th>
			<td>:</td>
			<td><?= $pembangunan->pelaksana_kegiatan ?></td>
		</tr>
		<tr>
			<th>Tahun</th>
			<td>:</td>
			<td><?= $pembangunan->tahun_anggaran ?></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td>:</td>
			<td><?= $pembangunan->keterangan ?></td>
		</tr>
	</table>
	<div class="divider"></div>
	<h3 class="font-bold text-heading text-lg lg:text-2xl">Lokasi Pembangunan</h3><br>
	<div id="map" style="height: 340px;"></div>
	<br>
	<div class="divider"></div>
	<h3 class="font-bold text-heading text-lg lg:text-2xl">Progres Pembangunan</h3><br>
	<div class="grid grid-cols-2 gap-4">
		<div>
			<?php if ($dokumentasi): ?>
				<?php foreach ($dokumentasi as $value): ?>
					<?php if (is_file(LOKASI_GALERI . $value->gambar)): ?>
						<img src="<?= base_url(LOKASI_GALERI . $value->gambar); ?>" alt="Foto Pembangunan <?= $value->persentase; ?>"/>
					<?php else: ?>
						<img src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" alt="Foto Pembangunan <?= $value->persentase; ?>"/>
					<?php endif; ?>
					<br>
					<b>Foto Pembangunan <?= $value->persentase; ?></b>
				<?php endforeach; ?>
			<?php else: ?>
				<div class="text-center">Belum ada progres</div>
			<?php endif; ?>
		</div>

	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		let map_key = "<?= $this->setting->mapbox_key; ?>";
		let lat = "<?= $pembangunan->lat ?? $desa['lat']; ?>";
		let lng = "<?= $pembangunan->lng ?? $desa['lng']; ?>";
		let posisi = [lat, lng];
		let zoom = "<?= $desa['zoom'] ?? 10 ?>";
		let logo = L.icon({
			iconUrl: "<?= base_url('assets/images/gis/point/construction.png'); ?>",
    });

		pembangunan = L.map('map').setView(posisi, zoom);
		getBaseLayers(pembangunan, map_key);
		pembangunan.addLayer(new L.Marker(posisi, {icon:logo}));
	});
</script>
