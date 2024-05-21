<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

    public function index(){
        $this->load->view('login_v');
    }

    public function auth(){
       // $cek = $this->db->get_where('users',['nik',true => $this->input->post('nik')])->row_result();
        //if ($cek){
          //  $cek_password = $this->db->get_where('users',['nik' => $cek['nik'], 'password' => $this->input->post('password',true) ])->row_result;
          $this->load->view('dashboard');      
    }
}
//}
?>