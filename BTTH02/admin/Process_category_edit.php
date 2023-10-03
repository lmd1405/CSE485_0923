<?php
if(isset($_POST['save'])){
    $name= $_POST['TenTL'];
    $maTL = $_POST['MaTL'];
  var_dump($name) ;
    echo $maTL;
}
try{
    $conn = new PDO("mysql:host = localhost;dbname=btth01_cse485_ex02.sql","root","140503");
    $sql_check = "SELECT * FROM theloai where ten_tloai ='$name' AND ma_tloai!='$maTL'";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();
    $RowCount = $stmt->rowCount();
    if($RowCount>0){
        header("Location:category.php?notification=existed");
    }
    else{
    $sql = "UPDATE theloai set ten_tloai = '$name' where ma_tloai='$maTL'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        header("Location:category.php?notification=added");
    }
    }


}
catch(PDOException $e){
    echo "error: ".$e->getMessage();
}
?>