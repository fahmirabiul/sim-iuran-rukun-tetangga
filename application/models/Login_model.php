<?php

class Login_model extends CI_Model
{

    public function ambil_login($username, $password)
    {
        $periksa = $this->db->get_where('admin', array('username' => $username, 'password' => $password));

        if ($periksa->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
