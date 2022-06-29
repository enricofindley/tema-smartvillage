<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$pages = array();
for($i=$paging->start_link; $i<=$paging->end_link; $i++) {
	array_push($pages, $i);
}
$total_pages = count($pages);
?>

<?php if((int) $paging->end_link > 1) : ?>
	<div class="justify-center btn-group">
		<?php if($paging->start_link) : ?>
			<a href="<?= site_url('first/'.$paging_page.'/'.$paging->start_link)?>" class="btn btn-sm">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
			</a>
		<?php endif ?>
		<?php if($paging->prev) : ?>
			<a href="<?= site_url('first/'.$paging_page.'/'.$paging->prev.$paging->suffix)?>" class="btn btn-sm">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
			</a>
		<?php endif ?>
		<?php foreach($pages as $page) : ?>
			<a href="<?= site_url('first/'.$paging_page.'/'.$page.$paging->suffix)?>" class=" btn btn-sm <?php ($p == $page || $paging->page == $page) and print('btn-active') ?>"><?= $page ?></a>
		<?php endforeach ?>
		<?php if($paging->next) : ?>
			<a href="<?= site_url('first/'.$paging_page.'/'.$paging->next.$paging->suffix)?>" class="btn btn-sm">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
			</a>
		<?php endif ?>
		<?php if($paging->end_link) : ?>
			<a href="<?= site_url('first/'.$paging_page.'/'.$paging->end_link)?>" class="btn btn-sm">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
			</a>
		<?php endif ?>
	</div>
<?php endif ?>
