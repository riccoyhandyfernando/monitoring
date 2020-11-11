
<?php  

class cabang_model extends CI_Model
{
	public function tampil_Data()
	{
		$this->db->from('kegiatan');
		$this->db->where('id_pegawai', $this->session->userdata('userid'));
		return $this->db->get();
	}

	public function input_data($post)
	{
		$data = array(
			'id_kegiatan' => random_string('alnum', 20),
			'id_pegawai'	=> $post['id_pegawai'],
			'kode_kegiatan ' => $post['kode_kegiatan'],
			'rencana_kegiatan ' => $post['rencana_kegiatan'],
			'perkembangan_kegiatan ' => $post['perkembangan_kegiatan'],
			'hasil_kegiatan ' => $post['hasil_kegiatan'],
			'keterangan ' => $post['keterangan'],
			'or'=> $post['or']
		);
		 $this->db->insert('kegiatan',$data);
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_data($post)
	{
		$data = array(
			// 'id_kegiatan ' =>$post['id_kegiatan'],
			'id_pegawai '	=> $post['id_pegawai'],
			'kode_kegiatan'=> $post['kode_kegiatan'],
			'rencana_kegiatan ' => $post['rencana_kegiatan'],
			'perkembangan_kegiatan ' => $post['perkembangan_kegiatan'],
			'hasil_kegiatan ' => $post['hasil_kegiatan'],
			'keterangan ' => $post['keterangan'],
			'or'=>$post['or'],
		);
		 $this->db->where('id_kegiatan', $post['id']);
		 $this->db->update('kegiatan',$data);

	}
	public function hapus_data($where,$table)
	{
		 $this->db->where($where);
		 $this->db->delete($table);
	}
}

?>