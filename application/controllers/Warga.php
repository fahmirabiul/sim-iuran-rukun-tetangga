<?php

class Warga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Warga_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['warga'] = $this->Warga_model->getAllWarga();
        if ($this->input->post('keyword')) {
            $data['warga'] = $this->Warga_model->cariDataWarga();
        }

        $this->load->view('templates/header');
        $this->load->view('warga/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['warga'] = $this->Warga_model->getAllWarga();

        if (isset($_POST['tambah'])) {
            $this->Warga_model->tambahDataWarga();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('warga');
        } else {
            $this->load->view('templates/header');
            $this->load->view('warga/tambah', $data);
            $this->load->view('templates/footer');
        }
    }

    // public function do_upload()
    // {
    //     $config['upload_path'] = './assets/foto/';
    //     $config['allowed_types'] = 'gif|jpg|png';
    //     $config['max_size'] = 2048;
    //     $config['max_width'] = 4000;
    //     $config['max_height'] = 5000;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('foto')) {
    //         $error = array('error' => $this->upload->display_errors());
    //         $this->load->view('warga/tambah', $error);
    //     } else {
    //         $data = array('error' => $this->upload->data());
    //         $this->load->view('warga', $data);
    //     }
    // }

    public function edit($nik)
    {
        $data['warga'] = $this->Warga_model->getWargaById($nik);

        if (isset($_POST['edit'])) {
            $this->Warga_model->editDataWarga();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('warga');
        } else {
            $this->load->view('templates/header');
            $this->load->view('warga/edit', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus($nik)
    {
        $this->Warga_model->hapusDataWarga($nik);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('warga');
    }
}
