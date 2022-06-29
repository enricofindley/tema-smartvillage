<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="navbar bg-base-100">
	<div class="navbar-start">
		<div class="dropdown">
			<button class="btn btn-ghost">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
			</button>
			<ul tabindex="0" class="dropdown-content menu menu-compact p-2 shadow bg-base-100 rounded-box w-fit">
				<li>
					<a href="<?= site_url() ?>">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
						Beranda
					</a>
				</li>
				<li tabindex="0">
					<a>
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
						Menu Kategori
					</a>
					<ul class="bg-base-100">
						<?php foreach($menu_kiri as $data):?>
							<li>
								<a href="<?= site_url("artikel/kategori/$data[slug]"); ?>">
									<?= $data['kategori']; ?>
								</a>
							</li>
						<?php endforeach;?>
					</ul>
				</li>
				<?php foreach ($menu_atas as $data): ?>
					<!-- tabindex will make the parent menu focusable to keep the submenu open if it's focused -->
					<li tabindex="0">
						<a href="<?= $data['link']?>">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>						<?= $data['nama']?>
						</a>
						<?php if (count($data['submenu']) > 0): ?>
							<ul class="bg-base-100">
								<?php foreach ($data['submenu'] as $submenu): ?>
									<li><a href="<?= $submenu['link']?>"><?= $submenu['nama']?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>

			</ul>
		</div>
		<label for="my-modal-3" class="btn btn-ghost btn-circle">
			<div class="indicator">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>				<span class="badge badge-xs badge-primary indicator-item"></span>
			</div>
		</label>
		<input type="checkbox" id="my-modal-3" class="modal-toggle">
		<div class="modal">
			<div class="modal-box relative">
				<ul>
					<?php foreach ($teks_berjalan AS $teks): ?>
						<li>
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
							<?= $teks['teks']?>
							<?php if ($teks['tautan']): ?>
								<a href="<?= $teks['tautan'] ?>" rel="noopener noreferrer" title="Baca Selengkapnya"><?= $teks['judul_tautan']?></a>
							<?php endif; ?>
						</li>
						<br>
					<?php endforeach; ?>
				</ul>
				<label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>

			</div>
		</div>
	</div>
	<div class="navbar-center">
		<a href="<?= site_url() ?>" class="btn btn-ghost text-base-content normal-case text-xl">
			<img src="<?= gambar_desa($desa['logo']);?>" width="30" valign="top" alt="<?= $desa['nama_desa']?>"/>
		</a>
	</div>
	<div class="navbar-end">
		<div class="dropdown dropdown-end">
			<label tabindex="0" class="btn btn-ghost bg-base-100 text-base-content">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
			</label>
			<div tabindex="0" class="dropdown-content card card-compact w-fit p-2 shadow bg-base-100 text-base-content">
				<div class="card-body">
					<h3 class="card-title">Pengaturan</h3>

					<form method=get action="<?= site_url(); ?>">
						<div class="form-control">
							<div class="input-group input-group-md">
								<input type="text" name="cari" maxlength="50" class="input input-bordered input-md w-full max-w-xs" value="<?= $cari ?>" placeholder="Cari Artikel">
								<button type="submit" class="btn btn-primary text-base-content">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
								</button>
							</div>
						</div>
					</form>
					<div class="form-control">
						<div class="input-group input-group-md">
							<select id="formTema" class="select select-bordered">
								<option disabled selected>Pilih Tema</option>
								<option value="light">Basic</option>
								<option value="dark">Basic-Dark</option>
								<option value="bumblebee">bumblebee</option>
								<option value="synthwave">synthwave</option>
								<option value="lemonade">Jeruk Nipis</option>
								<option value="night">Begadang</option>
								<option value="coffee">Kopi</option>
							</select>
							<button class="btn" onclick="ubahTema()">Ubah</button>
						</div>
					</div>
					<br>
					<h3 class="card-title">Statistik Pengunjung</h3>
					<div class="overflow-x-auto">
						<table class="table table-compact w-full">
							<tbody>
							<tr>
								<td><strong><small>Hari Ini: </small></strong></td>
								<td><strong><small><?= ribuan($statistik_pengunjung['hari_ini']) ?></small></strong></td>
							</tr>
							<tr>
								<td><strong><small>Kemarin: </small></strong></td>
								<td><strong><small><?= ribuan($statistik_pengunjung['kemarin']) ?></small></strong></td>
							</tr>
							<tr>
								<td><strong><small>Total Pengunjung: </small></strong></td>
								<td><strong><small><?= ribuan($statistik_pengunjung['total']) ?></small></strong></td>
							</tr>
							<tr>
								<td><strong><small>Sistem Operasi: </small></strong></td>
								<td><strong><small><?= $statistik_pengunjung['os']; ?></small></strong></td>
							</tr>
							<tr>
								<td><strong><small>IP Address: </small></strong></td>
								<td><strong><small><?= $statistik_pengunjung['ip_address']; ?></small></strong></td>
							</tr>
							<tr>
								<td><strong><small>Browser: </small></strong></td>
								<td><strong><small><?= $statistik_pengunjung['browser']; ?></small></strong></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="dropdown dropdown-end">
			<label tabindex="0" class="btn btn-ghost text-base-content">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
			</label>
			<ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 text-base-content rounded-box w-52">
				<li><a href="<?= site_url(); ?>layanan-mandiri">Layanan Mandiri</a></li>
				<li><a href="<?= site_url(); ?>siteman">Administrator</a></li>
			</ul>
		</div>

	</div>
</div>
