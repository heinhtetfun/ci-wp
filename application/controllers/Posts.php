<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller{
    public function index(){
            $data['title'] = 'latest post';
            $this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
    }
}