<?php
    if(isset($_GET['success'])){
        echo $_GET['success'];
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
        include "./Layout/header.php";
    ?>
    <div class="d-flex align-items-center justify-content-center">
    <div class="m-5 bg-secondary form-control" style="width: 500px">
        <div class="m-2 p-3">
            <h3 class="text-center">Sign in</h3>
        </div>
        <div class="m-2 p-3">
            <form action="process_login.php" class="border border-secondary bg-secondary p-4" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="form-check mb-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-success mb-2 float-end">Submit</button>
            </form>
        </div>
    
        <div class="m-2 p-3 text-center">
            <p>Don't have an account? <a href="">Sign up</a></p>
            <p><a href="">Forgot your password?</a></p>
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