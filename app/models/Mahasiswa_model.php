<?php 

class Mahasiswa_model{
    // private $dbh; // database handler
    // private $stmt;

    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
// data source name
    // public function construct(){
    //     // data source name
    //     $dsn = 'mysql:host=localhost;dbname=phpmvc';
    //     try{
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     }catch(PDOException $e){
    //         die($e->getMessage());
    //     }
    // }



public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
public function getMahasiswaById($id){
    $this->db->query('SELECT * FROM ' . $this->table . 'WHERE id=:id'); //jangan gunakan $id karena mwnghindari sql injection
    $this->db->bind('id', $id);
    return $this->db->single(); //single untuk menghindari hasil penuh
}
public function hapusDataMahasiswa($id){
    $query = "DELETE FROM mahasiswa WHERE id = :id ";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
}
public function cariDataMahasiswa(){
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword"; //LIKE sama istilahnya dengan = & jika menggunakan LIKE tiap katanya gunakan %:nama%
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
}
}