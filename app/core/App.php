<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    public function __construct()
    {
        $url = $this->parseURL();

        // controller
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
            var_dump($url);
            // unset($url[0]);

        }

        require_once '../app/controller' . $this->controller . '.php';
        $this->controller = new $this->controller;



        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }


        
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            // echo "Sebelum rtrim: $url<br>";
        
            // Menghilangkan '/' di akhir
            $url = rtrim($url, '/');
            // echo "Setelah rtrim: $url<br>";
        
            // Sanitasi URL
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // echo "Setelah sanitasi: $url<br>";
        
            // Memecah URL menjadi array
            $url = explode('/', $url);
            // echo "Setelah explode: ";
            // print_r($url);
            // echo "<br>";
        
            return $url;
        }
    }
}