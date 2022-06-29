<!-- widget Arsip Artikel -->

<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
			<a class="link link-hover" href="<?= site_url();?>arsip">Arsip Artikel</a>
		</h2>
			<div x-data="tab_Arsip()">
				<ul class="tabs tabs-boxed">
					<template x-for="(tab, index) in tabs" :key="index">
						<li class="tab w-1/3"
							:class="activeTab===index ? 'tab-active w-1/3' : ''" @click="activeTab = index"
							x-text="tab">
						</li>
					</template>
				</ul>
				<div class="w-80 text-center mx-auto">
					<?php foreach (array(0 => 'arsip_terkini', 1 => 'arsip_populer', 2 => 'arsip_acak') as $jenis => $jenis_arsip) :  ?>
						<div class="overflow-x-auto w-full" x-show="activeTab===<?= $jenis ?>">
							<table class="table w-full">
									<?php foreach ($$jenis_arsip as $arsip): ?>
										<tr class="hover">
											<td>
												<a href="<?= site_url('artikel/'.buat_slug($arsip))?>">
													<div class="flex items-center space-x-3">
														<div class="avatar">
															<div class="mask mask-parallelogram w-12 h-12">
																	<?php if (is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])): ?>
																		<img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])?>"/>
																	<?php else: ?>
																		<img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url('assets/images/404-image-not-found.jpg')?>"/>
																	<?php endif;?>
															</div>
														</div>
														<div>
															<?php $judul = potong_teks($arsip['judul'], 19) ?>
															<div class="font-bold text-sm"><?= $judul ?></div>
															<div class="text-sm opacity-50"><?= tgl_indo($arsip['tgl_upload']);?> | <?= hit($arsip['hit']);?></div>
														</div>
													</div>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</table>
						</div>
					<?php endforeach ?>
				</div>
			</div>
	</div>
</div>
