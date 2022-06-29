<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<h2 class="font-bold text-heading text-lg lg:text-2xl">Data Suplemen - <?= $main['suplemen']['nama']; ?></h2>
<div class="divider"></div>
<h3 class="font-bold text-heading text-base lg:text-xl">Rincian Data Suplemen</h3>
<div class="overflow-x-auto">
	<table class="table table-compact w-full">
    <tbody>
      <tr>
        <td width="20%">Nama Data</td>
        <td width="1%">:</td>
        <td><?= $main['suplemen']['nama']; ?></td>
      </tr>
      <tr>
        <td>Sasaran Terdata</td>
        <td>:</td>
        <td><?= $sasaran[$main['suplemen']['sasaran']]; ?></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><?= $main['suplemen']['keterangan']; ?></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<h3 class="font-bold text-heading text-base lg:text-xl">Daftar Terdata</h3>
<div class="overflow-x-auto">
	<table class="table table-compact w-full" id="tabel-data">
    <thead class="bg-gray disabled color-palette">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Jenis-kelamin</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($main['terdata'] as $key => $data): ?>
        <tr>
          <td class="text-center"><?= ($key + 1); ?></td>
          <td><?= $data['terdata_nama']; ?></td>
          <td><?= $data["tempat_lahir"]; ?></td>
          <td><?= $data["sex"]; ?></td>
          <td><?= $data["info"]; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
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
