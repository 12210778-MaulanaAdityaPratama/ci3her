<?php 
class mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_mahasiswa');
		$this->load->helper('url');
        $this->load->library('form_validation');

	}
    function index(){
		$this->load->view('input_mahasiswa');
}
function tambah(){
    $nim = $this->input->post('nim');
    $nama = $this->input->post('nama');
    $kelas = $this->input->post('kelas');
    $prodi = $this->input->post('prodi');
    $email = $this->input->post('email');

    $data = array(
        'nim' => $nim,
        'nama' => $nama,
        'kelas' => $kelas,
        'prodi' => $prodi,
        'email' => $email

        );
    $this->m_mahasiswa->input_data($data,'adit');
    redirect('mahasiswa');
}
}