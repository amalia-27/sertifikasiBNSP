<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');        
        
    }

    public function index()
    {
        $data['title'] = 'Halaman utama';
        $data = array(
            'arsip' => $this->home_model->tampil_data_arsip()
        );
        $this->load->view('template/navbar', $data);
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }

    public function arsip_surat()
    {
        $data['title'] = 'Arsip Surat';
        $this->load->view('template/navbar', $data);
        $this->load->view('arsip');
        $this->load->view('template/footer');
    }
    public function proses_arsip()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 0;
        
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('file_surat')){
            $this->session->set_flashdata('flash-data', 'Format data salah!!');
			redirect('Home/arsip_surat');
        }else{
            $upload_data = $this->upload->data();
            $nomor_surat = $this->input->post('nomor_surat');
            $kategori = $this->input->post('kategori');
            $judul = $this->input->post('judul');

            $input = array(
                'nomor_surat' => $nomor_surat,
                'kategori' => $kategori,
                'judul' => $judul,
                'file_surat' => $upload_data['file_name'],
            );
            $arsip_surat = $this->home_model->arsip($input);
            $this->session->set_flashdata('flash-data', 'Data berhasil disimpan');
			redirect('Home/arsip_surat');
        }
            

    }
    public function lihat_surat($id)
    {
        $data['title'] = 'Arsip Surat';
        $data['tampil']=$this->home_model->tampil_surat($id);
        $this->load->view('template/navbar', $data);
        $this->load->view('tampil_surat', $data);
        $this->load->view('template/footer');
    }
    
    public function download($id)
    {
		$data = $this->db->get_where('arsip',['id_arsip'=>$id])->row();
        
        force_download('uploads/'.$data->file_surat, NULL);
    }
    public function hapus($id){
        $where = array('id_arsip' => $id);
        $this->home_model->hapus($where, 'informasi');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');
        $this->session->set_flashdata('flash-data', 'Data berhasil Dihapus');
        
        redirect('Home','refresh');
    }
    public function search(){
        $keyword = $this->input->post('keyword');
        $data['surat']=$this->home_model->get($keyword);
        $this->load->view('index', $data);
    }
    public function about()
    {
        $data['title'] = 'Arsip Surat';
        $data['tampil']=$this->home_model->about_me();
        $this->load->view('template/navbar', $data);
        $this->load->view('about', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Home.php */
