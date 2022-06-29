<!-- widget Peta Wilayah Desa -->
<div class="card w-96 bg-base-100 shadow-xl h-automin-h-full">
	<div class="card-body">
		<h2 class="card-title">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
			<?="Wilayah ".ucwords($this->setting->sebutan_desa)?>
		</h2>
		<div id="map_wilayah" style="height:200px;"></div>
		<a href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']."/".$data_config['lng']?>" class="btn btn-primary btn-block" rel="noopener noreferrer" target="_blank">Buka Peta</a>
	</div>
</div>
