<?php
include "models/Lop.php";
class Lopservice{
    private $listLop;

    public function __construct()
    {
        $Lop1 = new Lop('1','HTTT1');
        $Lop2 = new Lop('2','CNTT1');
        $Lop3 = new Lop('3','KTPM1');
        $this->listLop = [];
        array_push($this->listLop,$Lop1,$Lop2,$Lop3);
    }
    
    public function getAllLop(){
        return $this->listLop;
    }
}
?>