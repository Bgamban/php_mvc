<?php 

class About extends Controller{

    public function index($nama ="Sasuke", $pekerjaan="Ninja"){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
            $data['judul'] = 'About Page';
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
    }
}