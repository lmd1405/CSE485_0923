<?php
    class SinhVien{
        private $id;
        private $tenSinhVien;
        private $emai;
        private $ngaysinh;
        private $idLop;

        public function __construct($id,$tenSinhVien,$emai,$ngaysinh,$idLop)
        {
            $this->id = $id;
            $this->tenSinhVien = $tenSinhVien;
            $this->emai = $emai;
            $this->ngaysinh =$ngaysinh ;
            $this->idLop = $idLop;
        }
        public function getID(){
            return $this->id;;
        }
        public function getTenSV(){
            return $this->tenSinhVien;
        }
        public function setID($id){
            $this->id=$id;
        }
        public function setTenTL($tenSinhVien){
            $this->tenSinhVien = $tenSinhVien;
        }
        public function getEmail(){
            return $this->emai;
        }
        public function getNgaySinh(){
            return $this->ngaysinh;
        }
        public function getIDLop(){
            return $this->idLop;
        }
        public function setEmail($emai){
            $this->emai = $emai;
        }
        public function setNgaySInh($ngaysinh){
            $this->ngaysinh = $ngaysinh;
        }
        public function setIDLOp($idLop){
            $this->idLop= $idLop;
        }

    }
?>