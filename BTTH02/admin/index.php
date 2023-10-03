<?php
// session_start();

// // Kiểm tra xem người dùng đã đăng nhập hay chưa
// if (!isset($_SESSION['user_id'])) {
//     // Chuyển hướng đến trang đăng nhập
//     header("Location: login.php");
//     exit();
// }
?>
<?php
  try{
    //b1 mo ket noi sql
    $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485_ex02.sql","root","140503");
    // b2 thuc hien truy van
    $sql = "	SELECT 
    (SELECT COUNT(*) FROM theloai) AS sltl,
    (SELECT COUNT(*) FROM tacgia) AS sltg,
    (SELECT COUNT(*) FROM baiviet) AS slbv" ;
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $rowcount = $stmt->rowCount();
    if($rowcount>0){
      $row  = $stmt->fetch();
    }
  }
  catch(PDOException $e){
    echo "error".$e->getMessage();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
<?php
  include "../admin/Layout/header1.php"
?>
<div class="d-flex row justify-content-center m-5 gx-5">
    <div class="col-xl-2  border border-secondary text-center m-2 p-2"><div class="text-primary "><h3>Người dùng</h3></div><div></div></div>
    <div class="col-xl-2  border border-secondary text-center m-2 p-2">
      <div class="text-primary ">
        <h3>bài viết</h3>
      </div>
      <div><h3><?=$row[2]?></h3></div>
    </div>
    <div class="col-xl-2  border border-secondary text-center m-2 p-2"><div class="text-primary "><h3>Tác giả</h3></div>
    <div><h3><?=$row[1]?></h3></div></div>
    <div class="col-xl-2  border border-secondary text-center m-2 p-2"><div class="text-primary "><h3>Thể loại</h3> 
  </div><div><h3><?=$row[0]?></h3></div></div>
</div>
</div>
         <div class="card text-center fixed-bottom">
            <h1>TLU'S MUSIC GARDEN</h1>
        </div>
    </div>
</body>
<script src="/js/bootstrap.bundle.min.js"></script>
</html>