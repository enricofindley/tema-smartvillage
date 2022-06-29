<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="slider -mx-3 lg:mx-auto lg:mt-0">
  <div class="owl-carousel slider-content">
    <?php foreach($slider_gambar['gambar'] as $data) : ?>
        <?php $img = $slider_gambar['lokasi'] . 'sedang_' . $data['gambar']; ?>
        <?php if(is_file($img)) : ?>
          <figure class="slider-item">
            <img src="<?= base_url($img) ?>" alt="<?= $data['judul'] ?>" class="slider-image">
          </figure>
        <?php endif ?>
      <?php endforeach ?>
  </div>
  <ul class="slider-nav">
    <li class="slider-nav-item slider-nav-prev"><span data-feather="chevron-left" class="icon"></span></li>
    <li class="slider-nav-item slider-nav-next"><span data-feather="chevron-right" class="icon"></span></li>
  </ul>
</section>