<?php
if(isset($_POST['sbpost'])){
    $id = $_POST['id'];
    $tieude= $_POST['Tieude'];
    $TenBH = $_POST['TenBH'];
    $maTL = $_POST['maTL'];
    $Ndung = $_POST['ND'];
    $matg = $_POST['matg'];
}
try{
    $conn = new PDO("mysql:host = localhost;dbname=btth01_cse485_ex02.sql","root","140503");
    $sql_check = "SELECT * FROM baiviet where ten_bhat = '$TenBH' AND ma_bviet!='$id' ";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();
    $RowCount = $stmt->rowCount();
    if($RowCount>0){
        header("Location:add_posts.php?notification=existed");
    }
    else{
    $sql = "UPDATE baiviet set tieude = '$tieude',ten_bhat='$TenBH',ma_tloai = '$maTL', noidung= '$Ndung',ma_tgia='$matg' where ma_bviet='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        header("Location:add_posts.php?notification=added");
    }
    }
}
catch(PDOException $e){
    echo "error: ".$e->getMessage();
}
?>