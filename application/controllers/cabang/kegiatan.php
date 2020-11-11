<?php 

class Kegiatan extends CI_Controller{

	function __construct(){
        parent::__construct();

        login();
    }

	public function index()
	{
		$this->load->model('cabang_model');
		$data = [
			'cabang' => $this->cabang_model->tampil_data()
		];
		$this->load->view('templates_cabang/header');
        $this->load->view('templates_cabang/sidebar');
        $this->load->view('cabang/index',$data);
        $this->load->view('templates_cabang/footer');
	}

	public function input()
	{

		$data = array(
			'id_pegawai '	=> set_value('id_pegawai'),
			'kode_kegiatan'=>set_value('kode_kegiatan'),
			'rencana_kegiatan ' => set_value('rencana_kegiatan'),
			'perkembangan_kegiatan ' => set_value('perkembangan_kegiatan'),
			'hasil_kegiatan ' => set_value('hasil_kegiatan'),
			'keterangan ' => set_value('keterangan'),
			'or'=> set_value('or'),
			
		);
		$data['cabang'] = $this->cabang_model->tampil_data()->result();
		$this->load->view('templates_cabang/header');
        $this->load->view('templates_cabang/sidebar');
        $this->load->view('cabang/form',$data);
        $this->load->view('templates_cabang/footer');	
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_pegawai','id_pegawai','required',[
			'required'=> 'Id Pegawai Wajib Diisi!']);
		$this->form_validation->set_rules('rencana_kegiatan','rencana_kegiatan','required',[
			'required'=> 'Rencana Kegiatan Wajib Diisi! ']);
	}

	public function update($id)
	{

		$where = array('id_kegiatan'=> $id);
		$data['kegiatan'] = $this->cabang_model->edit_data($where,'kegiatan')->row();
		$this->load->view('templates_cabang/header');
        $this->load->view('templates_cabang/sidebar');
        $this->load->view('cabang/form.php',$data);
        $this->load->view('templates_cabang/footer');
	}
	

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['input'])){
			if(cek_kegiata_cabang(set_value('kode_kegiatan'))->num_rows() == 0 ){
			$this->load->model('cabang_model');

			$this->kegiatan_model->input_data($post);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Monitoring Berhasil Di inputkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('cabang/kegiatan');
			}else{
        	redirect('cabang/kegiatan/input');
        }
        
		}else if(isset($post['update'])){
			$this->load->model('cabang_model');

			$this->cabang_model->update_data($post);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				 Data Kegiatan Berhasil Di update
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('cabang/kegiatan');
		}

	}

	public function delete($id)
	{
		$where = array ('id_kegiatan' => $id);
		$this->cabang_model->hapus_data($where,'kegiatan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data kegiatan Berhasil Di Hapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('cabang/kegiatan');
	}
}

 ?>