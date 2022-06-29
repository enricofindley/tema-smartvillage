<!-- widget SocMed -->

<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
			Info Media Sosial
		</h2>
		<div class="grid grid-cols-4 grid-flow-col">
		<?php foreach ($sosmed As $data): ?>
			<?php if (!empty($data["link"])): ?>
				<a class="" href="<?= $data['link']?>" rel="noopener noreferrer" target="_blank">
					<img src="<?= base_url().'assets/front/'.$data['gambar'] ?>" alt="<?= $data['nama'] ?>" style="width:50px;height:50px;"/>
				</a>
			<?php endif; ?>
		<?php endforeach; ?>
		</div>
	</div>

</div>
