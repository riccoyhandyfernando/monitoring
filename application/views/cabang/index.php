<div class="container-fluid">
	
<div class="alert alert-success" role="alert">
	<i class="fas fa-university"></i>Kegiatan Cabang
</div>
<?php echo $this->session->flashdata('pesan') ?>
<?php echo anchor('cabang/kegiatan/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Kegiatan </button>') ?>

	

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Id Fakultas</th>
			<th>Kode Kegiatan </th>
			<th>Rencana Kegiatan</th>
			<th>Perkembangan Kegiatan</th>
			<th> Hasil Kegiatan</th>
			<th> Keterangan </th>
			<th>Optimal/Realokasi</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php  
		$no = 1;
		foreach ($cabang->result() as $cbg) : ?>
		<tr>

			<td><?php echo $cbg->id_pegawai ?></td>
			<td><?php echo $cbg->kode_kegiatan ?></td>
			<td><?php echo $cbg->rencana_kegiatan ?></td>
			<td><?php echo $cbg->perkembangan_kegiatan?></td>
 			<td><?php echo $cbg->hasil_kegiatan ?></td>
			<td><?php echo $cbg->keterangan ?></td>
			<td><?php echo $cbg->or ?></td>
			<td width="20px"><?php echo anchor('cabang/kegiatan/update/'.$cbg->id_kegiatan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
			<?php echo anchor('cabang/kegiatan/delete/'.$cbg->id_kegiatan,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach; ?>

	</table>
</div>