<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="grid id-flow-row auto-rows-max gap-5 pl-10">
	<?php
	if ($w_cos):
		foreach ($w_cos as $data):
			$widget = trim($data['isi']);
			if ($data["jenis_widget"] == 1):
				include("$this->theme_folder/$this->theme/widgets/".$widget);
			elseif ($data["jenis_widget"] == 2):
				include($widget);
			else: ?>
				<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
					<div class="card-body">
						<h2 class="card-title"><?=$data["judul"]?></h2>
						<?=html_entity_decode($data['isi'])?>
					</div>
				</div>
			<?php endif;
		endforeach;
	endif;
	?>
</div>
