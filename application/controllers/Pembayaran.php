<?php

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
    }

    public function index()
    {
        $data['pembayaran'] = $this->Pembayaran_model->getAllPembayaran();
        if ($this->input->post('keynama')) {
            $data['pembayaran'] = $this->Pembayaran_model->cariDataNama();
        }

        $this->load->view('templates/header');
        $this->load->view('pembayaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id_pmb)
    {
        $this->Pembayaran_model->hapusDataPembayaran($id_pmb);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pembayaran');
    }

    public function tambah()
    {
        if (isset($_POST['tambah'])) {
            $this->Pembayaran_model->tambahDataPembayaran();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('pembayaran');
        } else {
            $this->load->view('templates/header');
            $this->load->view('pembayaran/tambah');
            $this->load->view('templates/footer');
        }
    }

    public function edit($id_pmb)
    {
        $data['pembayaran'] = $this->Pembayaran_model->getPembayaranById($id_pmb);

        if (isset($_POST['edit'])) {
            $this->Pembayaran_model->editDataPembayaran();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pembayaran');
        } else {
            $this->load->view('templates/header');
            $this->load->view('pembayaran/edit', $data);
            $this->load->view('templates/footer');
        }
    }
}
