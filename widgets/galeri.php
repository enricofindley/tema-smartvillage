<!-- widget Galeri-->

<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
			<a class="link link-hover" href="<?= site_url();?>first/gallery">Galeri Foto</a>
		</h2>
		<div style="height: 100%;" class="swiper swiperGaleri">
			<div class="swiper-wrapper">
				<?php foreach ($w_gal As $data): ?>
					<?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>
						<div class="swiper-slide">
							<figure>
								<a href="<?= site_url("first/sub_gallery/$data[id]"); ?>" rel="noopener noreferrer" target="_blank">
									<img src="<?= AmbilGaleri($data['gambar'],'kecil')?>" alt="Album : <?= "$data[nama]" ?>" />
									<span class="text-heading"><strong>Album: <?= "$data[nama]" ?></strong></span>
								</a>
							</figure>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</div>
