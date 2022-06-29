<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<h2 class="font-bold text-heading text-lg lg:text-2xl">Album Galeri</h2>
<div class="divider"></div>
<?php if($gallery) : ?>
	<div class="grid grid-cols-2 gap-4">
		<?php foreach($gallery as $album) : ?>
			<?php if(is_file(LOKASI_GALERI . "kecil_" . $album['gambar'])) : ?>
				<?php $link = site_url('first/sub_gallery/'.$album['id']) ?>
				<div>
					<a href="<?= $link ?>" class="gallery-thumbnail">
						<img src="<?= AmbilGaleri($album['gambar'],'kecil') ?>" alt="<?= $album['nama'] ?>" class="gallery-image" title="<?= $album['nama'] ?>">
					</a>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
<?php endif ?>
