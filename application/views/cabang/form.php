<div class="container-fluid">

	<div class="alert alert-success" role="alert">
	<i class="fas fa-university"></i>From input kegiatan
</div>
	<form method="post" action="<?php echo base_url('cabang/cabang/proses') ?>">
		<div class="form-group">
			<label>id_fakultas</label>
			<input type="hidden" name="id" value="<?=@$kegiatan->id_kegiatan?>">
			<input type="text" name="id_pegawai" value="<?=@$kegiatan->id_pegawai?>" placeholder="Masukkan id Fakultas  " class="form-control" >
			<?php echo form_error('id_pegawai', ' <div class="text-danger small" ml-3>')?>
		</div>
		
			<div class="form-group">
			<label>kode kegiatan</label>
			<input type="text" name="kode_kegiatan" value="<?=@$kegiatan->kode_kegiatan?>" placeholder="Masukkan Rencana Kegiatan" class="form-control read">
			<?php echo form_error('rencana_kegiatan', ' <div class="text-danger small" ml-3>')?>
		</div>

		<div class="form-group">
			<label>rencana Kegiatan</label>
			<input type="text" name="rencana_kegiatan" value="<?=@$kegiatan->rencana_kegiatan?>" placeholder="Masukkan Rencana Kegiatan" class="form-control">
			<?php echo form_error('rencana_kegiatan', ' <div class="text-danger small" ml-3>')?>
		</div>

		<div class="form-group">
			<label>perkembangan kegiatan </label>
			<input type="text" name="perkembangan_kegiatan" value="<?=@$kegiatan->perkembangan_kegiatan?>" placeholder="Masukkan perkembangan Kegiatan" class="form-control">
			<?php echo form_error('perkembangan_kegiatan',  ' <div class="text-danger small" ml-3>')?>
		</div>
		<div class="form-group">
			<label>hasil kegiatan</label>
			<input type="text" name="hasil_kegiatan" value="<?=@$kegiatan->hasil_kegiatan?>" placeholder="Masukkan hasil kediatan " class="form-control">
			<?php echo form_error('hasil_kegiatan', ' <div class="text-danger small" ml-3>')?>
		</div>
		<div class="form-group">
			<label>keterangan</label>
			<input type="text" name="keterangan" value="<?=@$kegiatan->keterangan?>" placeholder="Masukkan Rencana Kegiatan" class="form-control">
			<?php echo form_error('keterangan', ' <div class="text-danger small" ml-3>')?>
		</div>

		<div class="form-group">
			<label>Optimal/Realokasi</label>
			<input type="text" name="or" value="<?=@$kegiatan->or?>" placeholder="Masukkan Hasil Optimal/Realokasi" class="form-control">
			<?php echo form_error('or', ' <div class="text-danger small" ml-3>')?>
		</div>

		<button type="submit" name="<?=$this->uri->segment(3) == 'input' ? 'input' : 'update'?>" class="btn btn-primary">Simpan</button>
	</form>


</div>