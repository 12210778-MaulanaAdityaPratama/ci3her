<?php 
class admin extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
        $this->load->library('form_validation');

	}
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('view-admin',$data);
	}
	function tambah(){
		$this->load->view('view-input');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$pass = $this->input->post('pass');
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'pass' => $pass
			);
		$this->m_data->input_data($data,'user');
		redirect('admin');
	}
    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin');
	}
    function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where,'user')->result();
        $this->load->view('view-edit',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $pass = $this->input->post('pass');
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'pass' => $pass
        );
        $where = array(
            'id' => $id
        );
        $this->m_data->update_data($where,$data,'user');
        redirect('admin');
    }
}