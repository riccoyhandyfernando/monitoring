<div class="container-fluid">

	<div class="alert alert-success" role="alert">
	<i class="fas fa-university"></i>From <?=$this->uri->segment(3)?> Akun
</div>
	<form method="post" action="<?php echo base_url('administrator/admin/proses') ?>">
		<div class="form-group">
			<label>id_Fakultas</label>
			<input type="text" name="id_pegawai" value="<?=@$admin->id_pegawai?>" placeholder="Masukkan id Fakultas" class="form-control">
			<?php echo form_error('id_pegawai', ' <div class="text-danger small" ml-3>')?>
		</div>

		
		
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" value="<?=@$admin->username?>" placeholder="Masukkan Username" class="form-control">
			<?php echo form_error('username', ' <div class="text-danger small" ml-3>')?>
		</div>

		<div class="form-group">
			<label>Password <small>	(Kosogkan jika tak diubah) </small></label>
			<input type="text" name="password"  placeholder="Masukkan password " class="form-control">
			<?php echo form_error('password', ' <div class="text-danger small" ml-3>')?>
		</div>
		<div class="form-group">
			<label>Level</label>
			<input type="text" name="level" value="<?=@$admin->level?>" placeholder="Masukkan level akun " class="form-control">
			<?php echo form_error('level', ' <div class="text-danger small" ml-3>')?>
		</div>
		<div class="form-group">
			<label>Bidang</label>
			<input type="text" name="bidang" value="<?=@$admin->bidang?>" placeholder="Masukkan bidang akun" class="form-control">
			<?php echo form_error('bidang', ' <div class="text-danger small" ml-3>')?>
		</div>

		<button type="submit" name="<?=$this->uri->segment(3) == 'input' ? 'input' : 'update'?>" class="btn btn-primary">Simpan</button>
	</form>


</div>