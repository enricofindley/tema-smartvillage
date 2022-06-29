<div class="box box-danger" style="padding-bottom: 2rem;">
	<div class="box-header with-border">
		<h2 class="font-bold text-heading text-lg lg:text-2xl"><?= $heading ?></h2>
		<div class="divider"></div>
	</div>
	</style>
	<div class="box-body">
		<div class="row">
			<form id="peraturanForm" onsubmit="formAction(); return false;">
				<div class="btn-group gap-5">
					<div class="form-control w-fit max-w-xs">
						<label class="label">
							<span class="label-text">Jenis</span>
						</label>
						<select class="select select-bordered" name="kategori" id="kategori" onchange="formAction()">
							<option value="">Semua</option>
							<?php foreach($kategori as $s): ?>
								<option value="<?= $s['id'] ?>" <?php selected($s['id'], $kategori_dokumen) ?>><?= $s['nama'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-control w-fit max-w-xs">
						<label class="label">
							<span class="label-text">Tahun</span>
						</label>
						<select class="select select-bordered" name="tahun" id="tahun" onchange="formAction()">
							<option value="">Semua</option>
							<?php foreach($tahun as $t): ?>
								<option value="<?= $t['tahun'] ?>" <?php selected($t['tahun'], $tahun_dokumen) ?> ><?= $t['tahun'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-control w-full max-w-xs">
						<label class="label">
							<span class="label-text">Tentang</span>
						</label>
						<input type="text" name="tentang" id="tentang" class="input input-bordered input-md w-full max-w-xs">
					</div>
					<div class="form-group pt-8">
						<button type="submit" class="btn btn-primary btn-active"><i class="fa fa-search"></i> Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<br>
	<div>
		<div class="overflow-x-auto">
			<table id="info_publik" class="table table-compact w-full">
			<thead>
			<tr>
				<th>Judul Produk Hukum</th>
				<th>Jenis</th>
				<th>Tahun</th>
			</tr>
			</thead>
			<tbody id="tbody-dokumen">
			</tbody>
		</table>
	</div>
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#jdih-table').DataTable({
			"dom": 'rt<"bottom"p><"clear">',
			"destroy": true,
			"paging": false,
			"ordering": false
		});

		get_table();
	} );

	function get_table() {
		var url = "<?= site_url('first/ajax_table_peraturan')?>";

		$.ajax({
			type: "GET",
			url: url,
			dataType: "JSON",
			success: function(data)
			{
				var html;
				if (data.length == 0)
				{
					html = "<tr><td colspan='3' align='center'>No Data Available</td></tr>";
				}
				for (var i = 0; i < data.length; i++)
				{
					html += "<tr>"+"<td><a href='<?= site_url('dokumen_web/unduh_berkas/')?>"+data[i].id+"'>"+data[i].nama+"</a></td>"+
						"<td>"+data[i].kategori+"</td>"+
						"<td>"+data[i].tahun+"</td>";
				}
				$('#tbody-dokumen').html(html);
			},
			error: function(err, jqxhr, errThrown)
			{
				console.log(err);
			}
		})
	}

	function formAction()
	{
		$('#tbody-dokumen').html('');
		var url = "<?= site_url('first/filter_peraturan') ?>";
		var kategori = $('#kategori').val();
		var tahun = $('#tahun').val();
		var tentang = $('#tentang').val();

		$.ajax({
			type: "POST",
			url: url,
			data: {
				kategori: kategori,
				tahun: tahun,
				tentang: tentang
			},
			dataType: "JSON",
			success: function(data)
			{
				var html;
				if (data.length == 0)
				{
					html = "<tr><td colspan='3' align='center'>No Data Available</td></tr>";
				}
				for (var i = 0; i < data.length; i++)
				{
					html += "<tr>"+"<td><a href='<?= site_url('dokumen_web/unduh_berkas/')?>"+data[i].id+"'>"+data[i].nama+"</a></td>"+
						"<td>"+data[i].kategori+"</td>"+
						"<td>"+data[i].tahun+"</td>";
				}
				$('#tbody-dokumen').html(html);
			},
			error: function(err, jqxhr, errThrown)
			{
				console.log(err);
			}
		})
	}
</script>
