<?php

class Rental extends CI_Controller
{
    public function tambah_rental($id)
    {
        $data['detail'] = $this->R_model->ambil_id_mobil($id);

        $this->load->view('template_customer/header');
        $this->load->view('template_customer/topbar');
        $this->load->view('customer/tambah_rental', $data);
        $this->load->view('template_customer/footer');
    }

    public function tambah_rental_aksi()
    {
        $id_customer        = $this->session->userdata('id_customer');
        $id_mobil           = $this->input->post('id_mobil');
        $tanggal_rental     = $this->input->post('tanggal_rental');
        $tanggal_kembali    = $this->input->post('tanggal_kembali');
        $denda              = $this->input->post('denda');
        $harga              = $this->input->post('harga');

        $data = array(
            'id_customer'           => $id_customer,
            'id_mobil'              => $id_mobil,
            'tanggal_rental'        => $tanggal_rental,
            'tanggal_kembali'       => $tanggal_kembali,
            'denda'                 => $denda,
            'harga'                 => $harga,
            'tanggal_pengembalian'  => '-',
            'status_rental'         => 'Belum Selesai',
            'status_pengembalian'   => 'Belum Kembali',
            'total_denda'           => '0'
        );

        $this->R_model->insert_data($data, 'transaksi');

        $status = array(
            'status' => '0'
        );

        $id = array(
            'id_mobil' => $id_mobil
        );

        $this->R_model->update_data('mobil', $status, $id);

        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Transaksi Berhasil!</strong>, Silahkan Checkout!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('customer/dashboard');
    }
}
