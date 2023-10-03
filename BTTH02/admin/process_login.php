<?php
    if(isset($_POST['SBlogin'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //Truy van thong tin:
    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485_ex02.sql","root","140503");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM nguoidung WHERE tai_khoan='$user'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();
        //Buoc 3: Lay ra thong tin bao gom MAT KHAU BAM
        if($stmt->rowCount() > 0){
            $user = $stmt->fetch();
            //Lay ra mat khau
            $pass_hash = $user[2];
            if($pass==$pass_hash){
                //CAP THE (authentication - Not: authorization)
                session_start();
                $_SESSION['isLogin'] = $user;
                header("Location:Author.php");
            }else{
                echo $pass;
                echo $pass_hash;
               header("Location:login.php?error=not-matched-password");
            }
        }else{
            header("Location:login.php?error=not-existed");
        }


    }catch(PDOException $e){
        echo $e->getMessage();
    }
    }
?>