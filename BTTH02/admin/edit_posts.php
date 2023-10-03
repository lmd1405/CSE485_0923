<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
      
    }
    try{
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485_ex02.sql","root","140503");

    $sql = "	SELECT * FROM baiviet WHERE ma_bviet= '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rowcount = $stmt->rowCount();
    echo $rowcount;
    if($rowcount>0){
        $user = $stmt->fetch();
        //var_dump($user);
    }

    }
    catch(PDOException $e){
        echo "erro".$e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<?php
  include "../admin/Layout/header1.php"
?>
    <div class="align-items-center justify-content-center">
    <div class="m-5">
        <div class="m-2 p-3">
            <h1 class="text-center">Sửa bài viết</h1>
        </div>
        <div class="m-2 p-3">
            <form action="Process_Posts_edit.php" class="p-4" style="max-width: 600px; margin: 0 auto;" method="POST">
                <div class="input-group flex-nowrap mb-2" style="border-radius: 7px">
                    <span class="input-group-text">Ma BH</span>
                    <input class="form-control" name="id" style="width: 100%;" value="<?php echo$user[0];?>" readonly>
                </div>
                <div class="input-group flex-nowrap mb-2" style="border-radius: 7px">
                    <span class="input-group-text">Tiêu đề</span>
                    <input class="form-control" name="$tieude" style="width: 100%;" value="<?php echo$user[1];?>">
                </div>
                <div class="input-group flex-nowrap mb-2" style="border-radius: 7px">
                    <span class="input-group-text">Tên bài hát</span>
                    <input class="form-control" name="TenBH" value="<?php echo$user[2];?>" style="width: 100%;">
                </div>
                <div class="input-group flex-nowrap mb-2" style="border-radius: 7px">
                    <span class="input-group-text">Mã thể loại</span>
                    <input class="form-control" name="maTL" value="<?php echo$user[3];?>" style="width: 100%;">
                </div>
                <div class="input-group flex-nowrap mb-2" style="border-radius: 7px">
                    <span class="input-group-text">Nội dung</span>
                    <input class="form-control" name="Ndung" value="<?php echo$user[5];?>" style="width: 100%;">
                </div>
                <div class="input-group flex-nowrap mb-2" style="border-radius: 7px">
                    <span class="input-group-text">Mã tác giả</span>
                    <input class="form-control" name="matg" value="<?php echo$user[6];?>" style="width: 100%;">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-2" name="sbpost">Lưu lại</button>
                    <a href="Author.php" class="btn btn-warning">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
         <div class="card text-center fixed-bottom">
            <h1>TLU'S MUSIC GARDEN</h1>
        </div>
    </div>
</body>

<script src="./js/bootstrap.bundle.min.js"></script>
</html>