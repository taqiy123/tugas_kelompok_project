<?php
defined('BASEPATH') or exit('No direct script access allowed');
class index extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
        $this->template->views('view_mahasiswa', $data);
    }


    public function tambah_supplier()
    {
            $this->template->views('tambah_supplier');
    }


    public function input_supplier(){
            $id_supplier = $this->input->post('id_supplier');
            $nama_supplier = $this->input->post('nama_supplier');
            $alamat = $this->input->post('alamat');
            $phone = $this->input->post('phone');
            $keterangan = $this->input->post('keterangan');

            $data = array(
                'id_supplier' => $id_supplier,
                'nama_supplier' => $nama_supplier,
                'alamat' => $alamat,
                'phone' => $phone,
                'keterangan' => $keterangan,
                );
            $this->Mahasiswa_model->input_data($data,'tb_supplier');
            redirect(base_url('index.php/index/supplier'));
        }

    public function supplier()
    {
        $data['supplier'] = $this->Mahasiswa_model->getSupplier()->result();
        $this->template->views('supplier',$data);
    }

    public function edit_supplier($id)
    {
        $where = array('id_supplier' => $id);
        $data['supplier'] = $this->Mahasiswa_model->edit_data($where, 'tb_supplier')->result();
        $this->template->views('edit_supplier',$data);
    }


    public function update_supplier(){
            $id_supplier = $this->input->post('id_supplier');
            $nama_supplier = $this->input->post('nama_supplier');
            $alamat = $this->input->post('alamat');
            $phone = $this->input->post('phone');
            $keterangan = $this->input->post('keterangan');

            $data = array(
                'nama_supplier' => $nama_supplier,
                'alamat' => $alamat,
                'phone' => $phone,
                'keterangan' => $keterangan
            );

            $where = array(
                'id_supplier' => $id_supplier
            );
            $this->Mahasiswa_model->update_data($where,$data, 'tb_supplier');
            redirect(base_url('index.php/index/supplier'));
        }

    public function hapus_supplier($id)
    {
        $where = array('id_supplier' => $id);
        $this->Mahasiswa_model->hapus_data($where,'tb_supplier');
        redirect(base_url('index.php/index/supplier'));
    }
}