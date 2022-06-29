<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $article = $single_artikel ?>

<?php if($article['kategori']) : ?>
	<div class="badge badge-primary">
		<a class="link link-hover font-bold" href="<?= site_url('first/kategori/'.$article['kat_slug']) ?>">
			<?= $article['kategori'] ?>
		</a>
	</div>
<?php endif ?>

<h2 class="font-bold text-heading text-lg lg:text-2xl">
	<?= $article['judul'] ?>
</h2>
<div class="divider mb-1"></div>

<div class="badge badge-xs badge-info gap-2 p-3">
	<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
	<?= tgl_indo($article['tgl_upload']) ?>
</div>
<div class="badge badge-xs badge-success gap-2 p-3">
	<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
	<?= $article['owner'] ?>
</div>
<div class="badge badge-xs badge-warning gap-2 p-3">
	<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
	Dibaca <?= hit($article['hit']) ?>
</div>
<div class="mb-5"></div>
<?php if($article['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$article['gambar'])) : ?>
  <a href="<?= AmbilFotoArtikel($article['gambar'],'sedang') ?>" class="block" data-fancybox="images">
    <figure>
      <img src="<?= AmbilFotoArtikel($article['gambar'],'sedang') ?>" alt="<?= $article['judul'] ?>" class="w-full">
    </figure>
  </a>
<?php endif ?>
<br>
<div class="text-lg"><?= $article['isi'] ?></div>
<br>
<?php for($i = 1; $i <= 3; $i++) : ?>
  <?php if($article['gambar'.$i] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$article['gambar'.$i])) : ?>
    <a href="<?= AmbilFotoArtikel($article['gambar'.$i],'sedang') ?>" class="block" data-fancybox="images">
      <figure>
        <img src="<?= AmbilFotoArtikel($article['gambar'.$i],'sedang') ?>" alt="<?= $article['nama'] ?>" class="w-full">
      </figure>
    </a>
  <?php endif ?>
<?php endfor ?>

<?php if($article['dokumen']) : ?>
  <div class="bg-gray-200 dark:bg-dark-primary py-3 px-5 border-l-4 border-secondary">
    <h4 class="text-heading text-base">Dokumen Lampiran</h4>
    <a href="<?= base_url(LOKASI_DOKUMEN.$article['dokumen']) ?>" class="text-link text-sm flex space-x-3 pt-2">
      <span data-feather="download-cloud" class="icon icon-lg text-secondary"></span>
      <span><?= $article['link_dokumen'] ?></span>
    </a>
  </div>
<?php endif ?>

<h3 class="font-bold text-heading text-lg lg:text-2xl mb-2">Bagikan artikel ini:</h3>
<div class="flex space-x-2">
    <a href="http://www.facebook.com/sharer.php?u=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 bg-info-content text-white rounded-full hover:ring-2 hover:ring-tertiary hover:ring-offset-2 transition duration-100">
      <i class="fa fa-facebook text-xl"></i>
    </a>
    <a href="http://twitter.com/share?url=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 bg-info text-white rounded-full hover:ring-2 hover:ring-tertiary hover:ring-offset-2 transition duration-100">
      <i class="fa fa-twitter text-xl"></i>
    </a>
    <a href="https://telegram.me/share/url?url=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 bg-warning-content text-white rounded-full hover:ring-2 hover:ring-tertiary hover:ring-offset-2 transition duration-100">
      <i class="fa fa-telegram text-xl"></i>
    </a>
    <a href="https://api.whatsapp.com/send?text=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-10 h-10 bg-success text-white rounded-full hover:ring-2 hover:ring-tertiary hover:ring-offset-2 transition duration-100">
      <i class="fa fa-whatsapp text-xl"></i>
    </a>
</div>
