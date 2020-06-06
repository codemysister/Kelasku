<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Kelasku';
        $session = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['email' => $session['email']])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('user/index');
        $this->load->view('templates/footer');
    }

    public function gacha()
    {
        $session = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['email' => $session['email']])->row_array();
        $this->load->view('admin/gacha');        
    }
}
