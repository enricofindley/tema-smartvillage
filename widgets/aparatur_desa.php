<!-- widget Aparatur Desa -->
<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
			Aparatur <?= ucwords($this->setting->sebutan_desa)?>
		</h2>
		<div style="height: 100%;" class="swiper swiperAparatur">
			<div class="swiper-wrapper">
				<?php foreach($aparatur_desa['daftar_perangkat'] as $data) : ?>
					<div class="swiper-slide">
						<a href="">
							<img src="<?= $data['foto'] ?>"/><br>
							<span class="text-heading"><strong><?= $data['jabatan'] ?><br><small><?= $data['nama'] ?></small></strong></span>
						</a>
					</div>
				<?php endforeach ?>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</div>
