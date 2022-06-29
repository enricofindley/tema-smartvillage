<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="divider"><strong>TRANSPARANSI ANGGARAN</strong></div>
<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3">
	<?php $index = 0 ?>
	<?php foreach($data_widget as $subdata_name => $subdatas) : ?>
		<div class="flex justify-center text-3xl rounded-xl w-full pt-5 pb-5">
			<div class="card w-96 bg-accent text-accent-content">
				<div class="card-body items-center text-center">
					<h2 class="text-sm"><strong><?= ($subdatas['laporan'])?></strong></h2>
					<div class="text-sm breadcrumbs">
						<p>Realisasi | Anggaran</p>
					</div>
					<?php foreach($subdatas as $key => $subdata) : ?>
						<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
							<div class="text-sm breadcrumbs">
								<p><?= ucwords(strtolower($subdata['judul'])) ?></p><br>
								<p><strong>Rp<?= number_format($subdata['realisasi']) ?> | Rp<?= number_format($subdata['anggaran']) ?></strong></p>
							</div>
							<progress class="progress progress-primary w-56 shadow" value="<?= $subdata['persen'] ?>" max="100"></progress>
						<?php endif ?>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<?php $index++ ?>
	<?php endforeach ?>
</div>
<div class="divider"></div>
