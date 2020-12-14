<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_anggota extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/data_anggota.php');
        $this->load->view('templates/footer');
    }
}
