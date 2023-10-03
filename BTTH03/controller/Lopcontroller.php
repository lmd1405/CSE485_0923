<?php
    class Lopcontroller{
        public function index(){
            include "service/Lopservice.php";
            $lopservice = new Lopservice(); 
            $lop = $lopservice->getAllLop();
            include "view/Lop/Lop.php";
        }
        public function ThemLop(){
            
        }
    }
?>