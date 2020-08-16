<?php

class Iuran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Iuran_model');
    }

    public function index()
    {
        $data['iuran'] = $this->Iuran_model->getAllIuran();
        if ($this->input->post('keyword')) {
            $data['iuran'] = $this->Iuran_model->cariDataWarga();
        }

        $this->load->view('templates/header');
        $this->load->view('iuran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['iuran'] = $this->Iuran_model->getAllIuran();

        if (isset($_POST['tambah'])) {
            $data['warga'] = $this->Iuran_model->getAllWarga();
            $data['rows'] = $this->Iuran_model->countAllWarga();
            $this->Iuran_model->tambahDataIuran();
            // // $this->session->set_flashdata('flash', 'Ditambah');
            // redirect('iuran');

            $this->load->view('iuran/pembayaran', $data);
        } else {
            $this->load->view('templates/header');
            $this->load->view('iuran/tambah', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edit($id_iuran)
    {
        $data['iuran'] = $this->Iuran_model->getIuranById($id_iuran);

        if (isset($_POST['edit'])) {
            $this->Iuran_model->editDataIuran();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('iuran');
        } else {
            $this->load->view('templates/header');
            $this->load->view('iuran/edit', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus($id_iuran)
    {
        $this->Iuran_model->hapusDataIuran($id_iuran);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('iuran');
    }
}
