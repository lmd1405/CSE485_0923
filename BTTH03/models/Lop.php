<?php
    class Lop{
        private $id;
        private $tenLop;

        public function __construct($id,$tenLop)
        {
            $this->id=$id;
            $this->tenLop = $tenLop;
        }

        public function getID(){
            return $this->id;;
        }
        public function getTenLop(){
            return $this->tenLop;
        }
        public function setID($id){
            $this->id=$id;
        }
        public function setTenTL($tenLop){
            $this->tenLop = $tenLop;
        }
    }
?>