<?php

class HomeController {
    public function home() {
        header("Location: http://localhost/jobsheet5/index.php");
        exit(); // Ensure that no further code is executed after the redirect
    }

    public function mahasiswa() {
        header("Location: http://localhost/jobsheet5/views/mahasiswa/index.php");
        exit();
    }
    
    public function dosen() {
        header("Location: http://localhost/jobsheet5/views/dosen/index.php");
        exit();
    }
}
