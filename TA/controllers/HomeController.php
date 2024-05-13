<?php

class HomeController {
    public function home() {
        header("Location: http://localhost/TA/index.php");
        exit(); // Ensure that no further code is executed after the redirect
    }

    public function produk() {
        header("Location: http://localhost/TA/views/produk/index.php");
        exit();
    }
    
    public function suplier() {
        header("Location: http://localhost/TA/views/suplier/index.php");
        exit();
    }
}
