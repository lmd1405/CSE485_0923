<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    try{
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485_ex02.sql","root","140503");

    $sql = "	SELECT * FROM tacgia WHERE ma_tgia ='$id'";
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
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<?php
  include "../admin/Layout/header1.php"
?>
    <div class="d align-items-center justify-content-center">
    <div class="m-5">
        <div class="m-2 p-3">
            <h1 class="text-center">Sửa thông tin thể loại</h1>
        </div>
        <div class="m-2 p-3 justify-content-center" >
            <form action="Process_Author_edit.php" class="p-4 " style="width: 1550px;" method="POST">
                <div class="input-group flex-nowrap mb-3" style="border-radius: 7px">
                    <span class="input-group-text">Mã tác giả</span>
                    <input type="text" class="form-control" name="id" style="width: 1550px;" value="<?php echo $user[0]?>" readonly>
                </div>
                <div class="input-group flex-nowrap mb-3" style="border-radius: 7px">
                    <span class="input-group-text">Tên tác giả</span>
                    <input type="text" class="form-control" name="name" style="width: 1550px;" value="<?php echo $user[1]?>">
                </div>
                <div class="input-group flex-nowrap mb-3" style="border-radius: 7px">
                    <span class="input-group-text">HInh tác giả</span>
                    <input type="text" class="form-control" name="photo" style="width: 1550px;" value="<?php echo $user[2]?>">
                </div>
                <div class="d-flex float-end">
                    <button type="submit" class="btn btn-success me-2" name="sbtg">Lưu lại</button>
                    <a href="Author.php" class="btn btn-warning">Quay lại</a>
               
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