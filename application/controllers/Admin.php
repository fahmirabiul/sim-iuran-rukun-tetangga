<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['admin'] = $this->Admin_model->getAdmin();

        $this->load->view('templates/header');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['admin'] = $this->Admin_model->getAdminById($id);

        if (isset($_POST['edit'])) {
            $this->Admin_model->ubahDataAdmin();
            redirect('admin');
        } else {
            $this->load->view('templates/header');
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');
        }
    }
}
