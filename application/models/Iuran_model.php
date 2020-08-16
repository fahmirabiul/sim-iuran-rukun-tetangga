<?php

class Iuran_model extends CI_Model
{
    public function getAllIuran()
    {
        $query = $this->db->get('iuran');
        return $query->result_array();
    }

    public function cariDataWarga()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('id_iuran', $keyword);
        return $this->db->get('iuran')->result_array();
    }

    public function tambahDataIuran()
    {
        $data = [
            "id_iuran" => $this->input->post('id_iuran'),
            "tahun" => $this->input->post('tahun'),
            "bulan" => $this->input->post('bulan'),
            "nama_iuran" => $this->input->post('nama_iuran'),
            "biaya_iuran" => $this->input->post('biaya_iuran')
        ];

        $this->db->insert('iuran', $data);
    }

    public function getIuranById($id_iuran)
    {
        return $this->db->get_where('iuran', ['id_iuran' => $id_iuran])->row_array();
    }

    public function editDataIuran()
    {
        $data = [
            "id_iuran" => $this->input->post('id_iuran'),
            "tahun" => $this->input->post('tahun'),
            "bulan" => $this->input->post('bulan'),
            "nama_iuran" => $this->input->post('nama_iuran'),
            "biaya_iuran" => $this->input->post('biaya_iuran')
        ];

        $this->db->where('id_iuran', $this->input->post('id_iuran'));
        $this->db->update('iuran', $data);
    }

    public function hapusDataIuran($id_iuran)
    {
        $this->db->delete('iuran', ['id_iuran' => $id_iuran]);
    }

    public function getAllWarga()
    {
        $query = $this->db->get('warga');
        return $query->result_array();
    }

    public function countAllWarga()
    {
        return $this->db->get('warga')->num_rows();
    }
}
