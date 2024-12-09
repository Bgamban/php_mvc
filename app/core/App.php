<?php 
class App{
    protected $controller = "home";
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        //controller
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        // var_dump($_GET); // hasilnya akan array(0) karena di url kosong
        require '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        // method jika file tidak ada
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //params
        if(!empty($url)){
            $this->params = array_values($url);
        }
        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params); // untuk menjalankan controller dan method serta mengirimkan parameter && untuk menjalankan controller & method default

    }
    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/'); //rtrtim berfungsi untuk menghilangkan / pada url akhir
            $url = filter_var($url, FILTER_SANITIZE_URL); //agar url bersih dari karakter2 aneh menghindari hacking
            $url = explode('/', $url); //url dipecah berdasarkan tanda /
            return $url;
        }
    }
}