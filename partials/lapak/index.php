<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2 class="font-bold text-heading text-lg lg:text-2xl">Lapak</h2>
<div class="divider"></div>

<form method="get" class="form-inline text-start">
	<select class="select select-bordered" id="id_kategori" name="id_kategori">
		<option selected value="">Semua Kategori</option>
		<?php foreach ($kategori as $kategori_item) : ?>
			<option value="<?= $kategori_item->id ?>" <?= selected($id_kategori, $kategori_item->id) ?>><?= $kategori_item->kategori ?></option>
		<?php endforeach; ?>
	</select>
	<input type="text" name="keyword" maxlength="50" class="input input-bordered input-md w-full max-w-xs" value="<?= $keyword; ?>" placeholder="Cari Produk">
	<button type="submit" class="btn btn-primary btn-active">Cari</button>
	<?php if ($keyword): ?>
		<a href="<?=site_url('lapak')?>" class="btn btn-info">Tampilkan Semua</a>
	<?php endif ?>
</form>
<br>

<?php if ($produk): ?>
	<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-2">
		<?php foreach ($produk as $in => $pro): ?>
			<?php $foto = json_decode($pro->foto); ?>
			<div class="flex justify-center text-3xl rounded-xl w-full pt-5 pb-5">
				<div class="indicator ml-3">
					<span class="indicator-item indicator-center badge badge-primary gap-1"><i class="fa fa-user"></i><?= $pro->pelapak ?? 'ADMIN'; ?></span>
					<div class="card w-96 bg-base-100 shadow-xl">
						<?php if ($pro->foto): ?>
							<div class="swiper swiperUtama">
								<div class="swiper-wrapper">
									<?php for ($i = 0; $i < $this->setting->banyak_foto_tiap_produk; $i++): ?>
										<?php if ($foto[$i]): ?>
											<?php if (is_file(LOKASI_PRODUK . $foto[$i])): ?>
												<div class="swiper-slide">
													<figure>
														<img src="<?= base_url(LOKASI_PRODUK . $foto[$i]); ?>" alt="Foto <?= ($i+1); ?>">
													</figure>
												</div>
											<?php else: ?>
												<figure>
													<img src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" alt="Foto Produk"/>
												</figure>
											<?php endif; ?>
										<?php endif; ?>
									<?php endfor; ?>
								</div>
							</div>
						<?php else: ?>
							<figure>
								<img src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" alt="Foto Produk"/>
							</figure>
						<?php endif; ?>
						<div class="card-body">
							<?= $pro->nama; ?>
							<h2 class="card-title">
								<?php $harga_potongan = ($pro->tipe_potongan == 1) ? ($pro->harga * ($pro->potongan / 100)) : $pro->potongan; ?>
								<div class="badge badge-success w-full"><small><?= rupiah($pro->harga - $harga_potongan); ?></small></div>
								<?php if ($pro->potongan != 0): ?>
									<div style="text-decoration: line-through red;" class="badge badge-error w-full"><small><?= rupiah($pro->harga); ?></small></div>
								<?php endif; ?>
							</h2>
							<p class="text-lg"><b>Deskripsi :</b><br><?= nl2br($pro->deskripsi); ?></p>
							<div class="card-actions justify-end">
								<div class="btn-group">
									<?php if ($pro->telepon): ?>
										<?php $pesan = strReplaceArrayRecursive(['[nama_produk]' => $pro->nama, '[link_web]' => base_url('lapak'), '<br />' => "%0A"], nl2br($this->setting->pesan_singkat_wa)); ?>
										<a class="btn btn-accent" href="https://api.whatsapp.com/send?phone=<?=format_telpon($pro->telepon);?>&amp;text=<?= $pesan; ?>" rel="noopener noreferrer" target="_blank" title="WhatsApp"><i class="fa fa-whatsapp"></i> Beli</a>
									<?php endif; ?>
									<a href="https://www.openstreetmap.org/?mlat=<?= $pro->lat?>&mlon=<?= $pro->lng?>#map=<?= $pro->zoom?>/<?=$pro->lat."/".$pro->lng?>" rel="noopener noreferrer" target="_blank" class="btn btn-secondary">
										<i class="fa fa fa-map"></i>
										<span>Lokasi</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<?php $this->load->view("$folder_themes/commons/paging"); ?>
<?php else: ?>
	<h5>Belum ada produk yang ditawarkan.</h5>
<?php endif;?>
