<?php

class Warga_model extends CI_Model
{
    public function getAllWarga()
    {
        $query = $this->db->get('warga');
        return $query->result_array();
    }

    public function cariDataWarga()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nik', $keyword);
        $this->db->or_like('nama', $keyword);
        return $this->db->get('warga')->result_array();
    }

    public function getWargaById($nik)
    {
        return $this->db->get_where('warga', ['nik' => $nik])->row_array();
    }

    public function editDataWarga()
    {
        $foto = $_FILES['foto'];
        $namafoto = $_FILES['foto']['name'];

        if (file_exists('./assets/foto/' . $namafoto)) {
            unlink('./assets/foto/' . $namafoto);
        }

        if ($foto = '') { } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $foto = $this->input->post('namafoto');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            "nik" => $this->input->post('nik'),
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "nohp" => $this->input->post('nohp'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "foto" => $foto
        ];

        $this->db->where('nik', $this->input->post('nik'));
        $this->db->update('warga', $data);
    }

    public function hapusDataWarga($nik)
    {
        $this->db->delete('warga', ['nik' => $nik]);
    }

    public function tambahDataWarga()
    {
        $foto = $_FILES['foto'];

        if ($foto = '') { } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $foto = $this->input->post('namafoto');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            "nik" => $this->input->post('nik'),
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "nohp" => $this->input->post('nohp'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "foto" => $foto
        ];


        $this->db->insert('warga', $data);
    }
}
