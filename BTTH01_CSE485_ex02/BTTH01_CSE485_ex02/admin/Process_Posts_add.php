<?php
if(isset($_POST['sbpost'])){
    $tieude= $_POST['Tieude'];
    $TenBH = $_POST['TenBH'];
    $maTL = $_POST['maTL'];
    $Ndung = $_POST['ND'];
    $matg = $_POST['matg'];
}
try{
    $conn = new PDO("mysql:host = localhost;dbname=btth01_cse485_ex02.sql","root","140503");
    $sql_check = "SELECT * FROM baiviet where ten_bhat = '$TenBH'";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();
    $RowCount = $stmt->rowCount();
    if($RowCount>0){
        header("Location:add_posts.php?notification=existed");
    }
    else{
    $sql = "INSERT INTO baiviet (tieude,ten_bhat,ma_tloai,noidung,ma_tgia) Value ('$tieude','$TenBH','$maTL','$Ndung','$matg');";
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