<?php

class ModelBerita extends CI_Model
{
    public function getAllBerita()
    {
        return $this->db->get('berita')->result_array();
    }

    public function tambahDataBerita()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'headline_news' => $this->input->post('headline_news', true),
            'deskripsi_berita' => $this->input->post('deskripsi_berita', true),
            'tgl_publikasi' => $this->input->post('tgl_publikasi', true),
            'penulis' => $this->input->post('penulis', true),
            'kategori' => $this->input->post('kategori', true)
        ];

        $this->db->insert('berita', $data);
    }

    public function getBeritaById($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }
}
