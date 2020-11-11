<?php 

class admin extends CI_Controller{

	function __construct(){
        parent::__construct();

        login();
    }

	public function index()
	{
		$this->load->model('admin_model');
		$data = [
			'admin' => $this->admin_model->tampil_data()
		];
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin/index',$data);
        $this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data = array(
			
			'id_pegawai '	=> set_value('id_pegawai'),
			'username ' => set_value('username'),
			'password ' => set_value('password'),
			'level ' => set_value('level'),
			'bidang ' => set_value('bidang'),
			
		);
		$data['admin'] = $this->admin_model->tampil_data()->result();

		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin/form',$data);
        $this->load->view('templates_administrator/footer');	
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_pegawai','id_pegawai','required',[
			'required'=> 'Id Pegawai Wajib Diisi!']);
	}

	public function update($id_pegawai)
	{

		$where = array('id_pegawai'=> $id_pegawai);
		$data['admin'] = $this->admin_model->edit_data($where,'user')->row();
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin/form.php',$data);
        $this->load->view('templates_administrator/footer');
	}
	

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['input'])){
			if(cek_user(set_value('id_pegawai'))->num_rows() == 0 ){
			$this->load->model('admin_model');

			$this->admin_model->input_data($post);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Berhasil Di inputkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('administrator/admin');
			}else{
        	redirect('administrator/admin/input');
        }
		}else if(isset($post['update'])){
			$this->load->model('admin_model');

			$this->admin_model->update_data($post);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				 Data admin Berhasil Di update
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('administrator/admin');
		}

	}

	public function delete($id)
	{
		$where = array ('id_pegawai' => $id);
		$this->admin_model->hapus_data($where,'user');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data Berhasil Di Hapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('administrator/admin');
	}
}

 ?>