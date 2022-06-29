<!-- widget Komentar-->
<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
			Komentar Terbaru
		</h2>
		<div id="mostPopular2" class="tab-pane fade in active" role="tabpanel">
			<ul id="ul-menu">
				<div class="box-body">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" height="280" align="center" behavior=”alternate”>
						<ul class="sidebar-latest" id="li-komentar">
							<?php foreach($komen As $data): ?>
								<li>
									<table class="table table-compact w-full">
										<thead class="bg-gray disabled color-palette">
											<tr>
												<th><i class="fa fa-comment"></i> <?= $data['owner']?></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<small><?= tgl_indo2($data['tgl_upload'])?></small>
													<br>
													<?= potong_teks($data['komentar'], 50); ?>
													<br><a href="<?= site_url('artikel/' . buat_slug($data)); ?>">...selengkapnya</a>
												</td>
											</tr>

										</tbody>
									</table>
								</li>
							<?php endforeach; ?>
						</ul>
					</marquee>
				</div>
			</ul>
		</div>
	</div>
</div>
