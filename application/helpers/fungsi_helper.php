<?php 

function login() {
	$ci = &get_instance();
	if($ci->session->userdata('userid') == null){
		redirect('auth');
	}
}

function cek_kegiatan($id){
	$ci = &get_instance();
	$query=$ci->db->get_where('kegiatan',array('kode_kegiatan'=>$id));
	return $query;
}

function cek_user($id){
	$ci = &get_instance();
	$query = $ci->db->get_where('admin',array('id_pegawai'=>$id));
	return $query;
}
function cek_kegiatan_cabang($id){
	$ci = &get_instance();
	$query=$ci->db->get_where('kegiatan',array('kode_kegiatan'=>$id));
	return $query;
}