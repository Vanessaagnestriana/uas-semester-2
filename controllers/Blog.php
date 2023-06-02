<?php
class blog extends Controller {

    public function __construct(){

        if($_SESSION['session_login'] != 'sudah_login') {
            
        Flasher::setMessage('Login','Tidak ditemukan.','danger');
        header('location: '. base_url . '/login');
        exit;
        
        }
    }

    public function index(){
        $data['title']='Data Blog Mimika';
        $data['blog']=$this->model('BlogModel')->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }




    public function tambahBlog(){
        $data['title'] = 'Tambah Data Blog Mimika';
        $data['kategori']=$this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('blog/create', $data);
        $this->view('templates/footer');
    }
    public function simpanBlog(){
        if( $this->model('BlogModel')->tambahBlog($_POST) > 0 ){
            Flasher::setMessage('Berhasil','ditambahkan', 'success');
            header('location: ' . base_url . '/blog');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/blog');
            exit;
        }
    }  



    
    public function editBlog($id){
        $data['title'] = 'Detail Data Blog Mimika';
        $data['kategori']=$this->model('KategoriModel')->getAllKategori();
        $data['blog'] = $this->model('BlogModel')->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('blog/edit', $data);
        $this->view('templates/footer');
    }
    public function updateBlog(){
        if( $this->model('BlogModel')->updateDataBlog($_POST) > 0 ){
            Flasher::setMessage('Berhasil','diupdate', 'success');
            header('location: ' . base_url . '/blog');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/blog');
            exit;
        }
    }  


    

    public function cariBlog(){
        $data['title'] = 'Data Kependudukan Daerah Mimika';
        $data['blog'] = $this->model('BlogModel')->cariBlog();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }
    public function hapusBlog($id){
        if( $this->model('BlogModel')->deleteBlog($id) > 0 ){
            Flasher::setMessage('Berhasil','dihapus', 'success');
            header('location: ' . base_url . '/blog');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/blog');
            exit;
        }
    }  



}
