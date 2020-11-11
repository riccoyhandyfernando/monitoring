<div class="container-fluid">
	
<div class="alert alert-success" role="alert">
	<i class="fas fa-university"></i>Create Akun
</div>
<?php echo $this->session->flashdata('pesan') ?>
<?php echo anchor('administrator/admin/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> admin </button>') ?>

	

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Id Fakultas</th>
		
			<th>Username</th>
			<th>Password</th>
			<th> Level</th>
			<th> Bidang </th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php  
		$no = 1;
		foreach ($admin->result() as $adm) : ?>
		<tr>
			
			<td><?php echo $adm->id_pegawai ?></td>
		
			<td><?php echo $adm->username ?></td>
			<td><?php echo $adm->password?></td>
 			<td><?php echo $adm->level ?></td>
			<td><?php echo $adm->bidang ?></td>
			<td width="20px"><?php echo anchor('administrator/admin/update/'.$adm->id_pegawai,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
			<?php echo anchor('administrator/admin/delete/'.$adm->id_pegawai,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach; ?>

	</table>
</div>