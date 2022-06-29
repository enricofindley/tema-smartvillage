<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="single_page_area">

	<div class="single_page_area">
		<h2 class="font-bold text-heading text-lg lg:text-2xl">Daftar Calon Pemilih (pada tgl pemilihan <?= $tanggal_pemilihan ?>)</h2>
		<div class="divider"></div>
		<div class="overflow-x-auto">
		<table id="dpt" class="table table-compact w-full">
		<thead>
		<tr>
			<th class="text-center">No</th>
			<th class="text-start">Nama Dusun</th>
			<th class="text-right">RW</th>
			<th class="text-right">Jiwa</th>
			<th class="text-right">L</th>
			<th class="text-right">P</th>
		</tr>
		</thead><?php
		if(count($main) > 0){ ?>
			<tbody><?php
			foreach($main as $data){ ?>
				<tr>
					<td class="text-center"><?= $data["no"] ?></td>
					<td class="text-left"><?= strtoupper($data["dusun"]) ?></td>
					<td class="text-right"><?= strtoupper($data["rw"]) ?></td>
					<td class="text-right"><?= $data["jumlah_warga"] ?></td>
					<td class="text-right"><?= $data["jumlah_warga_l"] ?></td>
					<td class="text-right"><?= $data["jumlah_warga_p"] ?></td>
				</tr><?php
			} ?>
			</tbody>
			<tr>
				<th colspan="3" class="text-right">TOTAL</th>
				<th class="text-right"><?= $total["total_warga"] ?></th>
				<th class="text-right"><?= $total["total_warga_l"] ?></th>
				<th class="text-right"><?= $total["total_warga_p"] ?></th>
			</tr><?php
		} else { ?>
			<tr><td colspan=6 class="text-center">Daftar masih kosong</td></tr><?php
		} ?>
		</table>
		</div>
	</div>
</div> <!-- .list-frame -->
