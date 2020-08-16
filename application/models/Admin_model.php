<?php

class Admin_model extends CI_Model
{
    public function getAdmin()
    {
        $query = $this->db->get('admin');
        return $query->result_array();
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
    }

    public function ubahDataAdmin()
    {
        $data = [
            "id_admin" => $this->input->post('id_admin'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password')
        ];

        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('admin', $data);
    }
}
