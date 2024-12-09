<?php 
if(!session_id()){
    session_start();
}
require '../app/init.php'; //teknik ini bootstrapping artinya panggil 1 file nanti akan memanggil seluruh mvcnya

$app = new App;