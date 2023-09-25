<?php
if(isset($_POST['adtheloai'])){
    $name= $_POST['name'];
}
try{
    $conn = new PDO("mysql:host = localhost;dbname=btth01_cse485_ex02.sql","root","140503");
    $sql_check = "SELECT * FROM theloai where ten_tloai = '$name'";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();
    $RowCount = $stmt->rowCount();
    if($RowCount>0){
        header("Location:add_category.php?notification=existed");
    }
    else{
    $sql = "INSERT INTO theloai (ten_tloai) Value ('$name');";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        header("Location:add_category.php?notification=added");
    }
    }


}
catch(PDOException $e){
    echo "error: ".$e->getMessage();
}
?>