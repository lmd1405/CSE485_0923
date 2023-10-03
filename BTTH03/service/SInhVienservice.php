<?php
include "models/SinhVien.php";
class SinhVienservice{
    private $listSV;

    public function __construct()
    {
        $SV1 = new SinhVien('1','Nam','Nam@gamil.com','21-03-2003','2');
        $SV2 = new SinhVien('2','Nam','Nam@gamil.com','21-03-2003','2');
        $SV3 = new SinhVien('3','Nam','Nam@gamil.com','21-03-2003','2');
        $SV4 = new SinhVien('4','Nam','Nam@gamil.com','21-03-2003','1');
        $SV5 = new SinhVien('5','Nam','Nam@gamil.com','21-03-2003','1');
        $SV6 = new SinhVien('6','Nam','Nam@gamil.com','21-03-2003','1');
        $SV7 = new SinhVien('7','Nam','Nam@gamil.com','21-03-2003','3');
        $SV8 = new SinhVien('8','Nam','Nam@gamil.com','21-03-2003','3');
        $SV9 = new SinhVien('9','Nam','Nam@gamil.com','21-03-2003','3');
        $this->listSV = [];
        array_push($this->listSV,$SV1,$SV2,$SV3,$SV4,$SV5,$SV6,$SV7,$SV8,$SV9);
    }
    
    public function getAllSV(){
        return $this->listSV;
    }
    public function ThemSV($listSV){
        $this->listSV[] = $listSV ;
    }
}
?>