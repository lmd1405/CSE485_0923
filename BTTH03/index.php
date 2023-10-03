<?php
$controller =isset($_GET['c'])?$_GET['c']:'SinhVien';
$action = isset($_GET['a'])?$_GET['a']:'index';
//echo $controller.'--'.$action;
$controller = ucfirst($controller);
$controller = $controller."Controller";
$path = "./Controller/".$controller.".php";
//echo $path;
if(!file_exists($path)){
    echo "khong tim thay duong dan";
}

else{
    include "$path";
    $myController = new $controller();
    if (method_exists($myController, $action)) {
        $myController->$action();
    } else {
        echo "$action does not exist in $controller class";
    }
    
}

?>