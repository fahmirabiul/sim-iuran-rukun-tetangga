<?php

class Pembayaran_model extends CI_Model
{
    public function getAllPembayaran()
    {
        // $query = $this->db->get('pembayaran');
        // return $query->result_array();
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('warga', 'pembayaran.nik = warga.nik');
        $this->db->join('iuran', 'pembayaran.id_iuran = iuran.id_iuran');
        $this->db->order_by('tanggal_pmb', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function hapusDataPembayaran($id_pmb)
    {
        $this->db->delete('pembayaran', ['id_pmb' => $id_pmb]);
    }

    public function tambahDataPembayaran()
    {
        $data = [
            "nik" => $this->input->post('nik'),
            "id_iuran" => $this->input->post('id_iuran'),
            "tanggal_pmb" => $this->input->post('tanggal_pmb')
        ];

        $this->db->insert('pembayaran', $data);
    }

    public function cariDataNama()
    {
        $nama = $this->input->post('keynama');

        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('warga', 'pembayaran.nik = warga.nik');
        $this->db->join('iuran', 'pembayaran.id_iuran = iuran.id_iuran');
        $this->db->like('nama', $nama);
        $this->db->order_by('tanggal_pmb', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cariDataNamaIuran()
    {
        $nama = $this->input->post('keynama');
        $iuran = $this->input->post('keyiuran');

        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('warga', 'pembayaran.nik = warga.nik');
        $this->db->join('iuran', 'pembayaran.id_iuran = iuran.id_iuran');
        $this->db->like('nama', $nama);
        $this->db->order_by('tanggal_pmb DESC', 'id_iuran DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPembayaranById($id_pmb)
    {
        // return $this->db->get_where('pembayaran', ['id_pmb' => $id_pmb])->row_array();
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('warga', 'pembayaran.nik = warga.nik');
        $this->db->join('iuran', 'pembayaran.id_iuran = iuran.id_iuran');
        $this->db->where('id_pmb', $id_pmb);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function editDataPembayaran()
    {
        $data = [
            "id_pmb" => $this->input->post('id_pmb'),
            "nik" => $this->input->post('nik'),
            "id_iuran" => $this->input->post('id_iuran'),
            "tanggal_pmb" => $this->input->post('tanggal_pmb'),
            "status_pmb" => $this->input->post('status_pmb')
        ];

        $this->db->where('id_pmb', $this->input->post('id_pmb'));
        $this->db->update('pembayaran', $data);
    }
}
