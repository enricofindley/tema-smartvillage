<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$shortcuts = array(
		array(
				'icon' => 'peta.svg',
				'name' => 'Peta Desa',
				'link' => site_url('peta'),
				'is_external' => false
		),
		array(
				'icon' => 'hukum.svg',
				'name' => 'Produk Hukum',
				'link' => site_url('peraturan_desa'),
				'is_external' => false
		),
		array(
				'icon' => 'arsip.svg',
				'name' => 'Arsip Berita',
				'link' => site_url('arsip'),
				'is_external' => false
		),
		array(
				'icon' => 'publik.svg',
				'name' => 'Informasi Publik',
				'link' => site_url('informasi_publik'),
				'is_external' => false
		),
		array(
				'icon' => 'galeri.svg',
				'name' => 'Album Galeri',
				'link' => site_url('first/gallery'),
				'is_external' => false
		),
		array(
				'icon' => 'covid.svg',
				'name' => 'Kawal COVID-19',
				'link' => 'https://kawalcovid19.id',
				'is_external' => true
		)
);
?>


<?php if($transparansi) $this->load->view($folder_themes .'/partials/apbdesa', $transparansi) ?>

<footer class="footer p-10 bg-base-200 text-base-content">
	<div class="flex w-fit p-5">
		<div class="grid h-20 flex-grow card rounded-box place-items-center">
			<img width="70px" height="70px" src="<?= gambar_desa($desa['logo']);?>"  alt="<?= $desa['nama_desa']?>"/>
		</div>
		<div class="grid h-20 flex-grow card rounded-box place-items-center">
			<strong><p>
				<?= $this->setting->website_title. ' ' . ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?>,
				<br><?=$desa['alamat_kantor']?>,<br>
				<?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?>,<?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?>
			</p></strong>
		</div>
	</div>
	<div class="text-center">
		<span class="footer-title">Shortcut</span>
		<div class="grid grid-flow-col gap-2">
			<?php foreach($shortcuts as $index => $shortcut) : ?>
				<a href="<?= $shortcut['link'] ?>" class="btn btn-square btn-ghost p-0">
					<img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/' . $shortcut['icon']) ?>" alt="<?= $shortcut['name'] ?>"  target="<?php $shortcut['is_external'] and print('_blank') ?>" rel="noopener" class="w-full p-0">
					<br>
					<small><strong><?= $shortcut['name'] ?></strong></small>
				</a>
			<?php endforeach ?>
		</div>
	</div>
</footer>

<footer class="footer px-10 py-4 border-t bg-neutral text-neutral-content border-base-300">
	<div class="text-center items-center grid-flow-col">
		<img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/sv_logo.png') ?>" alt="">
		<strong><p>Tema Ini Dibuat Oleh : <br> <a class="link link-hover" href="https://smartvillage.co.id" rel="noopener noreferrer" target="_blank">Smart Village Lampung</a></p></strong>
	</div>
	<div class="text-center md:place-self-center md:justify-self-end">
		<div>
			<strong>
				<p>
					Copyright ©
					<a class="link link-hover" href="https://opendesa.id" rel="noopener noreferrer" target="_blank">OpenDesa</a>
					&#9677
					<a class="link link-hover" href="https://github.com/OpenSID/OpenSID" rel="noopener noreferrer" target="_blank">
						OpenSID <?= AmbilVersi()?>
					</a>
					<a class="link link-hover" href="<?= site_url() ?>" rel="noopener noreferrer" target="_blank"> | smartvillage <?= THEME_VERSION ?></a>
				</p>
			</strong>
		</div>
	</div>
</footer>
