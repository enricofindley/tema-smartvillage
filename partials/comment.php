<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if(is_array($komentar) && $single_artikel['boleh_komentar']) : ?>
  <?php
    $comments = array();
    foreach ($komentar as $comment ) {
      if($comment['is_archived'] != 1) array_push($comments, $comment);
    }
    $comments = array_reverse($comments);
    $forms = array(
      'owner' => 'Nama',
      'email' => 'Alamat Email',
      'no_hp' => 'No. HP'
    )
  ?>
	<div class="divider"></div>
  <?php if(count($comments) > 0) : ?>
    <div class="py-3 divide-y">
      <?php foreach($comments as $comment) : ?>
        <div class="flex space-x-3 py-3">
          <div class="space-y-1 flex flex-col">
            <span class="font-bold"><?= $comment['owner'] ?></span>
            <span class="inline-flex items-center text-sm text-gray-500 dark:text-gray-300"><i class="icon icon-sm mr-1 inline-block" data-feather="calendar"></i> <?= $comment['tgl_upload'] ?></span>
            <span class="text-lg">"<?= $comment['komentar'] ?>"</span>
          </div>
        </div>
      <?php endforeach ?>
    </div>
		<div class="divider"></div>
  <?php endif ?>

	<h3 class="font-bold text-heading text-lg lg:text-2xl">Kirim Komentar:</h3><br>
  <form action="<?= site_url('first/add_comment/'.$single_artikel['id'])?>" method="POST"class="space-y-3"  id="kolom-komentar">
    <div class="flex flex-col space-y-1">
		<h5 class="font-bold text-heading text-lg">Komentar</h5>
      <textarea class="textarea textarea-primary" name="komentar" id="komentar" cols="30" rows="4"><?= $_SESSION['post']['komentar'] ?></textarea>
    </div>
    <div class="grid gap-2 lg:grid-cols-3 grid-cols-1">
      <?php foreach($forms as $name => $label) : ?>
        <div class="flex flex-col space-y-1">
			<h5 class="font-bold text-heading text-lg"><?= $label ?></h5>
          <input type="text" class="input input-bordered input-primary w-full max-w-xs" id="<?= $name ?>" name="<?= $name ?>" value="<?= $name === 'owner' && !empty($_SESSION['nama']) ? $_SESSION['nama'] : $_SESSION['post'][$name] ?>">
        </div>
      <?php endforeach ?>
    </div>
    <div class="flex flex-col lg:flex-row">
      <div class="w-full lg:w-5/12 overflow-hidden">
        <img id="captcha" src="<?= base_url('securimage/securimage_show.php') ?>" alt="CAPTCHA Image" class="w-full lg:w-11/12">
        <button type="button" class="button button-transparent text-sm" onclick="document.getElementById('captcha').src = '<?= base_url("securimage/securimage_show.php?")?>'+Math.random(); return false">[Ganti Gambar]</button>
      </div>
      <div class="w-full lg:w-7/12">
        <input type="text" class="input input-bordered input-primary w-full max-w-xs" name="captcha_code" maxlength="6" value="<?= $_SESSION['post']['captcha_code'] ?>" placeholder="Isikan kode captcha yang muncul">
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-active">Kirim Komentar <span class="fa fa-send ml-2"></span></button>
  </form>

  <?php $alert = !empty($_SESSION['validation_error']) ? 'danger' : 'success'; ?>
  <?php if ($flash_message): ?>
    <div class="alert is-<?= $alert ?>"><?= $flash_message?></div>
    <?php unset($_SESSION['validation_error']); ?>
  <?php endif; ?>
<?php endif; ?>
