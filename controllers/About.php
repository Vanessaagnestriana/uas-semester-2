<?php
class about extends Controller {

    public function __construct(){

        if($_SESSION['session_login'] != 'sudah_login') {
            
        Flasher::setMessage('Login','Tidak ditemukan.','danger');
        header('location: '. base_url . '/login');
        exit;
        
        }
    }

    public function index(){

        $data['title'] = 'About Me';
        $data['nama'] = 'Vanessa Agnes Triana';
        $data['prodi'] = 'Teknologi Rekayasa Internet';
        $data['github'] = 'Belum ada';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');


    }
    
}