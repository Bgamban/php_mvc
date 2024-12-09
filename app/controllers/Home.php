<?php 
class Home extends Controller{
    public function index(){ //jika tidak menuliskan apapun di urlnya maka method inilah yang dipanggil
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser(); //dipanggil controller User_model lalu panggil salah satu method didalamnya getUser. Dan masukkan isinya ke data
        $this->view('templates/header', $data);
        $this->view('home/index', $data); //mencari file didalam folder view namanya file index.php
        $this->view('templates/footer');
    }
}