<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

	<h2 class="link link-hover font-bold text-heading text-lg lg:text-2xl">Galeri Album <a href="<?= site_url('first/gallery') ?>" class="text-link with-underline"><?= $parrent['nama'] ?></a></h2>
	<div class="divider"></div>
<?php if($gallery) : ?>
  <div class="gallery main-content">
	  <div class="grid grid-cols-2 gap-4">
		<?php foreach($gallery as $album) : ?>
		  <?php if(is_file(LOKASI_GALERI . "kecil_" . $album['gambar'])) : ?>
			<?php $link = AmbilGaleri($album['gambar'],'sedang') ?>
				<div>
					<a href="<?= $link ?>" data-fancybox="images" data-caption="<?= $data['nama'] ?>" class="gallery-thumbnail">
					  <img src="<?= AmbilGaleri($album['gambar'],'kecil') ?>" alt="<?= $album['nama'] ?>" class="gallery-image" title="<?= $album['nama'] ?>">
					</a>
				</div>
		  <?php endif ?>
		<?php endforeach ?>
	  </div>
  </div>
<?php endif ?>
