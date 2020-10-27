<?php

class Logins extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Users_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if ($this->input->post()) {
            if ($this->Users_model->doLogin()) redirect(site_url('Login'));
        }

        // tampilkan halaman login
        $this->load->view("Login_view.php");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('Login'));
    }
}
