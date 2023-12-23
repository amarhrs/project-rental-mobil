<?php

class Transaksi extends CI_Controller
{
    public function index()
    {
        $customer = $this->session->userdata('id_customer');

        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs 
        WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND cs.id_customer='$customer'
        ORDER BY id_rental DESC")->result();

        $this->load->view('template_customer/header');
        $this->load->view('template_customer/topbar');
        $this->load->view('customer/transaksi', $data);
        $this->load->view('template_customer/footer');
    }

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs 
        WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.id_rental='$id'
        ORDER BY id_rental DESC")->result();

        $this->load->view('template_customer/header');
        $this->load->view('template_customer/topbar');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('template_customer/footer');
    }

    public function pembayaran_aksi()
    {
        $id                 = $this->input->post('id_rental');
        $bukti_pembayaran   = $_FILES['bukti_pembayaran']['name'];

        if ($bukti_pembayaran) {
            $config['upload_path']     = './assets/bukti_pembayaran';
            $config['allowed_types']   = 'pdf|jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('bukti_pembayaran')) {
                $bukti_pembayaran = $this->upload->data('file_name');
                $this->db->set('bukti_pembayaran', $bukti_pembayaran);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'bukti_pembayaran' => $bukti_pembayaran,
        );

        $where = array(
            'id_rental' => $id
        );

        $this->R_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Bukti Pembayaran Anda Berhasil di Upload!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('customer/transaksi');
    }

    public function cetak_invoice($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs 
        WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.id_rental='$id'")->result();

        $this->load->view('template_customer/header');
        $this->load->view('customer/cetak_invoice', $data);
        $this->load->view('template_customer/footer');
    }

    public function batal_transaksi($id)
    {
        $where = array('id_rental' => $id);
        $data = $this->R_model->get_where($where, 'transaksi')->row();

        $where2 = array('id_mobil' => $data->id_mobil);
        $data2 = array('status' => '1');

        $this->R_model->update_data('mobil', $data2, $where2);
        $this->R_model->delete_data($where, 'transaksi');
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Transaksi berhasil dibatalkan!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('customer/transaksi');
    }
}
