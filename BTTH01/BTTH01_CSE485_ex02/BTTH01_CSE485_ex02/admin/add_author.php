
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
            <h1 class="text-center">Thêm tác giả</h1>
        </div>
        <div class="m-2 p-3" >
            <form action="Process_Author_add.php" class="p-4 " style="width: 1550px;" method="POST">
                <div class="input-group flex-nowrap mb-2" style="border-radius: 7px">
                    <span class="input-group-text">Tên tác giả</span>
                    <input class="form-control-lg float-end" name="name" style="width: 1550px; ">
                </div>
                <div class="input-group flex-nowrap mb-2" style="border-radius: 7px">
                    <span class="input-group-text">hinh tác giả</span>
                    <input class="form-control-lg float-end" name="photo" style="width: 1550px; ">
                </div>
                <div class="d-flex float-end">
                    <button type="submit" class="btn btn-success me-2" name="sbtg">Thêm</button>
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