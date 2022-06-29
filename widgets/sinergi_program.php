<!-- widget Sinergi Program-->

<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path></svg>
			Sinergi Program
		</h2>
		<div style="height: 100%;" class="swiper swiperSinergi">
			<div class="swiper-wrapper">
				<?php foreach($sinergi_program as $key => $program) :
					$baris[$program['baris']][$program['kolom']] = $program;
				endforeach; ?>

				<?php foreach($baris as $baris_program) : ?>
					<?php $width = 100/count($baris_program)-count($baris_program)?>
					<?php foreach($baris_program as $key => $program) : ?>
						<div class="swiper-slide">
							<a href="<?= $program['tautan']?>" rel="noopener noreferrer" target="_blank">
								<img src="<?= base_url().LOKASI_GAMBAR_WIDGET.$program['gambar']?>" alt="<?= $program['judul']?>" />
								<span class="text-heading"><strong><?= $program['judul']?></strong></span>
							</a>
						</div>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</div>
