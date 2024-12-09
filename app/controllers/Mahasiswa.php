<?php 

class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    
    // public function getMahasiswaById($id){
    //     $this->db->query('SELECT * FROM ' . $this->table . 'WHERE id:id');
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }
    // public function tambahDataMahasiswa($data){
    //         $query ="INSERT  INTO mahasiswa VALUES ('', :nama, :nrp, :email, :jurusan)";
    //         $this->db->query($query);
    //         $this->db->bind('nama', $data['nama']);
    //         $this->db->bind('nrp', $data['nrp']);
    //         $this->db->bind('email', $data['email']);
    //         $this->db->bind('jurusan', $data['jurusan']);
    
    //         $this->db->execute();
    
    //         return $this->db->rowCount();
    //     }
    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'Success');
            header('Location ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Ditambahkan', 'Danger');
            header('Location ' . BASEURL . '/mahasiswa');
            exit;

        }
    }
    public function hapus($id){
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){
            Flasher::setFlash('Berhasil', 'Dihapus', 'Success');
            header('Location ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Dihapus', 'Danger');
            header('Location ' . BASEURL . '/mahasiswa');
            exit;

        }
    }
    public function getubah(){
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }
    public function ubah(){
        if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0){
            Flasher::setFlash('Berhasil', 'Diubah', 'Success');
            header('Location ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Diubah', 'Danger');
            header('Location ' . BASEURL . '/mahasiswa');
            exit;

        }
    }
    // public function ubahDataMahasiswa($data){
    //     $query ="UPDATE  INTO mahasiswa SET? nama=:nama, nrp=:nrp, email=:email, jurusan = :jurusan WHERE id = :id";
    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nrp', $data['nrp']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('jurusan', $data['jurusan']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
    public function cari(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}