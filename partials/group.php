<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style>
	.button.select {
		text-transform: none;
		border-width: medium;
	}
</style>
<div class="single_page_area">
	<h2 class="font-bold text-heading text-lg lg:text-2xl">Data Kelompok - <?= $detail['nama']; ?></h2>
	<div class="divider"></div>
	<h4 class="text-lg"><?= $detail['keterangan']?></h4><br>
	<h3 class="font-bold text-heading text-lg lg:text-2xl">Daftar Pengurus</h3>
	<div class="box-body">
		<div class="overflow-x-auto">
			<table class="table table-compact w-full">
				<thead>
				<tr>
					<th>No</th>
					<th>Jabatan</th>
					<th>Nama</th>
					<th>Alamat</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($pengurus as $key => $data): ?>
					<tr>
						<td><?= $key + 1?></td>
						<td><?= $data['jabatan']?></td>
						<td nowrap><?= $data['nama']?></td>
						<td><?= $data['alamat']?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br>
		<h3 class="font-bold text-heading text-lg lg:text-2xl">Daftar Anggota</h3>
		<div class="overflow-x-auto">
			<table class="table table-compact w-full" id="tabel-data">
				<thead>
				<tr>
					<th>No</th>
					<th>No. Anggota</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($anggota as $key => $data): ?>
					<tr>
						<td><?= $key + 1?></td>
						<td><?= $data['no_anggota'] ?:'-'; ?></td>
						<td nowrap><?= $data['nama']; ?></td>
						<td><?= $data['alamat']; ?></td>
						<td><?= $data['sex']; ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#tabel-data').DataTable({
			'processing': true,
			"pageLength": 10,
			'order': [],
			'columnDefs': [
				{
					'searchable': false,
					'targets': 0
				},
				{
					'orderable': false,
					'targets': 0
				}
			],
			'language': {
				'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
			},
		});
	});
</script>
