<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $abstrak_headline = potong_teks($headline['isi'], 250); ?>
<?php $url = site_url('artikel/'.buat_slug($headline)); ?>
<?php $image = ($headline['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$headline['gambar'])) ?
		AmbilFotoArtikel($headline['gambar'],'sedang') :
		gambar_desa($desa['logo']);
?>

<div class="container mx-auto px-5 mt-10 ">
	<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-5">
		<!-- Slider Utama -->
		<div class="flex col-span-2 justify-center text-3xl rounded-xl w-full h-fit">
			<div class="swiper swiperUtama">
				<div class="swiper-wrapper">
					<?php foreach($slider_gambar['gambar'] as $data) : ?>
						<?php $img = $slider_gambar['lokasi'] . 'sedang_' . $data['gambar']; ?>
						<?php if(is_file($img)) : ?>
							<div class="swiper-slide"><img src="<?= base_url($img) ?>" alt="<?= $data['judul'] ?>" ></div>
						<?php endif ?>
					<?php endforeach ?>
				</div>
				<div class="swiper-scrollbar"></div>
			</div>
		</div>
		<!-- Container Headline -->
		<div class="flex justify-center text-3xl rounded-xl w-full ml-2">
			<div class="indicator">
				<span class="indicator-item indicator-center badge badge-primary">Headline</span>
				<div class="card w-96 bg-accent text-accent-content shadow-xl">
					<figure class="px-10 pt-10">
						<img src="<?= $image ?>" alt="<?= $headline['judul'] ?>" class="rounded-xl" />
					</figure>
					<div class="card-body items-center text-center">
						<h2 class="card-title"><?= $headline['judul'] ?></h2>
						<p></p>
						<div class="card-actions">
							<a href="<?= $url ?>">
								<button class="btn btn-primary gap-2">
									Selengkapnya
									<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



