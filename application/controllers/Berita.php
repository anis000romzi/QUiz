<?php

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelBerita');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('headline_news', 'Headline', 'required');
        $this->form_validation->set_rules('deskripsi_berita', 'Deskripsi', 'required');
        $this->form_validation->set_rules('tgl_publikasi', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('berita/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->ModelBerita->tambahDataBerita();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('berita/tampil');
        }
    }
    
    public function tampil()
    {
        $data['berita'] = $this->ModelBerita->getAllBerita();
        $this->load->view('templates/header');
        $this->load->view('berita/tampil', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($id)
    {
        $data['berita'] = $this->ModelBerita->getBeritaById($id);
        $this->load->view('templates/header');
        $this->load->view('berita/detail', $data);
        $this->load->view('templates/footer');
    }
}
