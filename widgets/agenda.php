<!-- Widget Agenda -->

<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
			<a class="link link-hover" href="<?= site_url('first/kategori/1000')?>">Agenda</a>
		</h2>
		<div x-data="tab_Agenda()">
			<ul class="tabs tabs-boxed">
				<template x-for="(tab, index) in tabs" :key="index">
					<li class="tab w-1/3"
						:class="activeTab===index ? 'tab-active w-1/3' : ''" @click="activeTab = index"
						x-text="tab">
					</li>
				</template>
			</ul>
			<div class="w-80 text-center mx-auto">
				<?php if (count(array_merge($hari_ini, $yad, $lama)) > 0): ?>
					<div x-show="activeTab===0">
						<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="100%" height="100" align="center" behavior=”alternate”>
							<ul>
								<?php foreach ($hari_ini as $agenda): ?>
									<li>
										<table class="table table-compact w-full">
											<tr>
												<td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a></td>
											</tr>
											<tr>
												<th id="label-meta-agenda" width="30%">Waktu</th>
												<td width="5%">:</td>
												<td id="isi-meta-agenda" width="65%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
											</tr>
											<tr>
												<th id="label-meta-agenda">Lokasi</th>
												<td>:</td>
												<td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
											</tr>
											<tr>
												<th id="label-meta-agenda">Koordinator</th>
												<td>:</td>
												<td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
											</tr>
										</table>
									</li>
								<?php endforeach; ?>
							</ul>
						</marquee>
					</div>
					<div x-show="activeTab===1">
						<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="100%" height="100" align="center" behavior=”alternate”>
							<ul>
								<?php if (count($yad) > 0): ?>
									<?php foreach ($yad as $agenda): ?>
										<li>
											<table class="table table-compact w-full">
												<tr>
													<td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a></td>
												</tr>
												<tr>
													<th id="label-meta-agenda" width="30%">Waktu</th>
													<td width="5%">:</td>
													<td id="isi-meta-agenda" width="65%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
												</tr>
												<tr>
													<th id="label-meta-agenda">Lokasi</th>
													<td>:</td>
													<td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
												</tr>
												<tr>
													<th id="label-meta-agenda">Koordinator</th>
													<td>:</td>
													<td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
												</tr>
											</table>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
						</marquee>
					</div>
					<div x-show="activeTab===2">
						<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="100%" height="100" align="center" behavior=”alternate”>
							<ul>
								<?php foreach ($lama as $agenda): ?>
									<li>
										<table class="table table-compact w-full">
											<tr>
												<td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a></td>
											</tr>
											<tr>
												<th id="label-meta-agenda" width="30%">Waktu</th>
												<td width="5%">:</td>
												<td id="isi-meta-agenda" width="65%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
											</tr>
											<tr>
												<th id="label-meta-agenda">Lokasi</th>
												<td>:</td>
												<td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
											</tr>
											<tr>
												<th id="label-meta-agenda">Koordinator</th>
												<td>:</td>
												<td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
											</tr>
										</table>
									</li>
								<?php endforeach; ?>
							</ul>
						</marquee>
					</div>
				<?php else: ?>
					<p>Belum ada agenda</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
