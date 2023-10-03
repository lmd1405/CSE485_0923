<?php
    class SinhViencontroller{
        public function index(){
            include "service/SinhVienservice.php";
            $sinhvienservice = new SinhVienservice(); 
            $sinhvien = $sinhvienservice->getAllSV();
            include "view/SinhVien.php";
        }
    }
?>