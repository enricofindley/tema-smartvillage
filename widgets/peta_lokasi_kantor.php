<!-- widget Peta Lokasi Kantor Desa -->

<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
			<?="Lokasi Kantor ".ucwords($this->setting->sebutan_desa)?>
		</h2>
		<div id="map_canvas" style="height:200px;"></div>
		<a href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']."/".$data_config['lng']?>" rel="noopener noreferrer" target="_blank" class="btn btn-primary btn-block">Buka Peta</a>
		<div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-100 text-center rounded-box">
			<div class="collapse-title text-xl font-medium">
				 Detail
			</div>
			<div class="collapse-content">
				<div class="overflow-x-auto">
					<table class="table table-compact w-fit">
						<img src="<?=gambar_desa($desa['kantor_desa'], TRUE)?>" alt="Kantor Desa">
						<tr>
							<td><strong><small>Alamat: </small></strong></td>
							<td><strong><small><?=$desa['alamat_kantor']?></small></strong></td>
						</tr>
						<tr>
							<td><strong><small><?=ucwords($this->setting->sebutan_desa)." "?>: </small></strong></td>
							<td><strong><small><?=$desa['nama_desa']?></small></strong></td>
						</tr>
						<tr>
							<td><strong><small><?=ucwords($this->setting->sebutan_kecamatan)?>: </small></strong></td>
							<td><strong><small><?=$desa['nama_kecamatan']?></small></strong></td>
						</tr>
						<tr>
							<td><strong><small><?=ucwords($this->setting->sebutan_kabupaten)?>: </small></strong></td>
							<td><strong><small><?=$desa['nama_kabupaten']?></small></strong></td>
						</tr>
						<tr>
							<td><strong><small>Kodepos: </small></strong></td>
							<td><strong><small><?=$desa['kode_pos']?></small></strong></td>
						</tr>
						<tr>
							<td><strong><small>Telepon: </small></strong></td>
							<td><strong><small><?=$desa['telepon']?></small></strong></td>
						</tr>
						<tr>
							<td><strong><small>Email: </small></strong></td>
							<td><strong><small><?=$desa['email_desa']?></small></strong></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



