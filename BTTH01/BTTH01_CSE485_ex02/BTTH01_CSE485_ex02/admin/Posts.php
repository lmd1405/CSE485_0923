<?php
// session_start();

// // Kiểm tra xem người dùng đã đăng nhập hay chưa
// if (!isset($_SESSION['user_id'])) {
//     // Chuyển hướng đến trang đăng nhập
//     header("Location: login.php?success=category.php");
//     exit();
// }
?>
<?php
  try{
    //b1 mo ket noi sql
    $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485_ex02.sql","root","140503");
    // b2 thuc hien truy van
    $sql = "SELECT * FROM baiviet" ;
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $rowcount = $stmt->rowCount();
    if($rowcount>0){
      $TheLoai = $stmt->fetchAll();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<?php
  include "../admin/Layout/header1.php"
?>
<div class="main-content vh-100 p-3">
  <div class="m-5">
    <a href="add_posts.php" class="btn btn-success"><i class="bi bi-person-add"></i>Thêm mới</a>
  </div>
  <div >
      <table class="table">
          <thead>
             <tr>
                <th scope="col">#</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Tên bài hát</th>
                <th scope="col">mã thể loại</th>
                <th scope="col">Tóm tắt</th>
                <th scope="col">nội dung</th>
                <th scope="col">Ngày viết</th>
                <th scope="col">Sua</th>
                <th scope="col">Xoa</th>
             </tr>
          </thead>
          <tbody>
          <?php foreach($TheLoai as $row){?>
             <tr>
                <th><?php echo $row[0];?></th>
                <th><?php echo $row[1];?></th>
                <th><?php echo $row[2];?></th>
                <th><?php echo $row[3];?></th>
                <th><?php echo $row[4];?></th>
                <th><?php echo $row[5];?></th>
                <th><?php echo $row[7];?></th>
                <th><a href="edit_posts.php?id=<?php echo $row[0];?>"><i class="bi bi-pencil-square"></i></a></th>
                <th><a href=""><i class="bi bi-trash"></i></a></th>
              </tr>
              <?php } ?>
          </tbody>
      </table>
  </div>
</div>

</div>
         <div class="card text-center fixed-bottom">
            <h1>TLU'S MUSIC GARDEN</h1>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>