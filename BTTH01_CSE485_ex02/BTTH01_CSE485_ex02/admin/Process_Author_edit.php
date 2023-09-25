<?php
if(isset($_POST['sbtg'])){
    $id = $_POST['id'];
    $name= $_POST['name'];
    $photo = $_POST['photo'];
}
try{
    $conn = new PDO("mysql:host = localhost;dbname=btth01_cse485_ex02.sql","root","140503");
    $sql_check = "SELECT * FROM tacgia where ten_tgia = '$name' And ma_tgia!='$id'";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();
    $RowCount = $stmt->rowCount();
    if($RowCount>0){
        header("Location:author.php?notification=existed");
    }
    else{
    $sql = "UPDATE tacgia set ten_tgia='$name', hinh_tgia='$photo' where ma_tgia='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        header("Location:author.php?notification=added");
    }
    }


}
catch(PDOException $e){
    echo "error: ".$e->getMessage();
}
?>
