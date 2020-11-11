<div class="container-fluid">
	
<div class="alert alert-success" role="alert">
	<i class="fas fa-university"></i>Kegiatan
</div>
<?php echo $this->session->flashdata('pesan') ?>
<?php echo anchor('administrator/kegiatan/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Kegiatan </button>') ?>

	

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>id fakultas</th>
			<th>Kode Kegiatan</th>
			<th>rencana kegiatan</th>
			<th>perkembangan kegiatan</th>
			<th> hasil kegiatan</th>
			<th> Keterangan </th>
			<th>Optimal/Realokasi</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php  
		$no = 1;
		foreach ($kegiatan->result() as $kgt) : ?>
		<tr>
			
			<td><?php echo $kgt->id_pegawai ?></td>
			<td><?php echo $kgt->kode_kegiatan ?> </td>
			<td><?php echo $kgt->rencana_kegiatan ?></td>
			<td><?php echo $kgt->perkembangan_kegiatan?></td>
 			<td><?php echo $kgt->hasil_kegiatan ?></td>
			<td><?php echo $kgt->keterangan ?></td>
			<td><?php echo $kgt->or ?></td>
			<td width="20px"><?php echo anchor('administrator/kegiatan/update/'.$kgt->id_kegiatan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
			<?php echo anchor('administrator/kegiatan/delete/'.$kgt->id_kegiatan,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach; ?>

	</table>
</div>