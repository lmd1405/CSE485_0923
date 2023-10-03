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
    <div class="container">
        <div class=" text-center"><h1>Quản lý sinh viên</h1></div>
        <div>
        <div>
            <a href="" class="btn btn-success">Thêm mới</a>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Tên SV</th>
                        <th scope="col">email</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Mã lớp</th>
                        <th scope="col"> Sửa</th>
                        <th scope="col"> Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($sinhvien as $row){?>
                            <tr>
                                <td><?=$row->getID() ?></td>
                                <td><?=$row->getTenSV() ?></td>
                                <td><?=$row->getEmail() ?></td>
                                <td><?=$row->getNgaySinh() ?></td>
                                <td><?=$row->getIDLop() ?></td>
                                <td><a href="http://localhost/BTTH03/index.php?id=<?=$row->getID() ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href=""><i class="bi bi-trash3-fill"></i></a></td>
                            </tr>
                           <?php }
                        ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>