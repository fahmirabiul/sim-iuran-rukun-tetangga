<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function ceklogin()
    {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $berhasil = $this->Login_model->ambil_login($username, $password);
            if ($berhasil == 1) {
                $this->session->set_userdata(array('status_login' => 'sukses'));
                redirect('warga');
            } else {
                redirect('login');
            }
        } else {
            $this->load->view('login/index');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
