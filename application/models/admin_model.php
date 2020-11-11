<?php  

class admin_model extends CI_Model
{
	public function tampil_Data()
	{
		return $this->db->get('user');
	}

	public function input_data($post)
	{
		$data = array(
			'id_pegawai'	=> $post['id_pegawai'],
			'username ' => $post['username'],
			'password ' => md5($post['password']),
			'level ' => $post['level'],
			'bidang ' => $post['bidang'],
		);
		 $this->db->insert('user',$data);
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_data($post)
	{
		
		$data = array(
			'username ' => $post['username'],
			'level ' => $post['level'],
			'bidang ' => $post['bidang'],
		);
		if($post['password'] != null){
			$data['password'] = md5($post['password']);
		}
		 $this->db->where('id_pegawai', $post['id_pegawai']);
		 $this->db->update('user',$data);
		 

	}
	public function hapus_data($where,$table)
	{
		 $this->db->where($where);
		 $this->db->delete($table);
	}
}

?>