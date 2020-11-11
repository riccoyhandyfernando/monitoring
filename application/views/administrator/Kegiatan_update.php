<div class="container-fluid">
	
<div class="alert alert-success" role="alert">
	<i class="fas fa-university"></i>Form Update Kegiatan
</div>

	<?php foreach($kegiatan as $kgt): ?>
		<form method="post" action="<?php echo base_url('administrator/kegiatan/update_aksi') ?>">
			<input type="hidden" name="id" value="<?=$kgt->id_kegiatan?>">

		<div class="form-group">
			<label>rencana kegiatan </label>
			<input type="text" name="rencana_kegiatan" class="form-control" value="<?php echo $kgt->rencana_kegiatan ?>">
		</div>

		<div class="form-group">
			<label>perkembangan kegiatan </label>
			<input type="text" name="perkembangan_kegiatan" class="form-control" value="<?php echo $kgt->perkembangan_kegiatan ?>">
		</div>

		<div class="form-group">
			<label>hasil kegiatan </label>
			<input type="text" name="hasil_kegiatan" class="form-control" value="<?php echo $kgt->hasil_kegiatan ?>">
		</div>

		<div class="form-group">
			<label>keterangan </label>
			<input type="text" name="keterangan" class="form-control" value="<?php echo $kgt->keterangan ?>">
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>

		</form>
	<?php endforeach; ?>
</div>