<?php 

class Kegiatan extends CI_Controller{

	function __construct(){
        parent::__construct();

        login();
    }

	public function index()
	{
		$this->load->model('Kegiatan_model');
		$data = [
			'kegiatan' => $this->kegiatan_model->tampil_data()
		];
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kegiatan/index',$data);
        $this->load->view('templates_administrator/footer');
	}

	public function input()
	{	
		
		$data = array(
			'kode_kegiatan '=> set_value('kode_kegiatan'),
			'id_pegawai '	=> set_value('id_pegawai'),
			'rencana_kegiatan ' => set_value('rencana_kegiatan'),
			'perkembangan_kegiatan ' => set_value('perkembangan_kegiatan'),
			'hasil_kegiatan ' => set_value('hasil_kegiatan'),
			'keterangan ' => set_value('keterangan'),
			'or' => set_value('or'),
			
		);
		$data['kegiatan'] = $this->kegiatan_model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kegiatan/form',$data);
        $this->load->view('templates_administrator/footer');
        
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
		$data['kegiatan'] = $this->kegiatan_model->edit_data($where,'kegiatan')->row();
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kegiatan/form.php',$data);
        $this->load->view('templates_administrator/footer');
	}
	

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['input'])){
			if(cek_kegiatan(set_value('kode_kegiatan'))->num_rows() == 0 ){
			$this->load->model('Kegiatan_model');

			$this->kegiatan_model->input_data($post);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Monitoring Berhasil Di inputkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			
			redirect('administrator/kegiatan');
			}else{
        	redirect('administrator/kegiatan/input');
        }	

		}else if(isset($post['update'])){
			$this->load->model('Kegiatan_model');

			$this->kegiatan_model->update_data($post);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				 Data Kegiatan Berhasil Di update
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('administrator/kegiatan');
		}

	}

	public function delete($id)
	{
		$where = array ('id_kegiatan' => $id);
		$this->kegiatan_model->hapus_data($where,'kegiatan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data kegiatan Berhasil Di Hapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('administrator/kegiatan');
	}
}

 ?>