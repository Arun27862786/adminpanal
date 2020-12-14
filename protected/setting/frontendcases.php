<?php
if (! isset($query1ans) || $query1 == '' || $query1ans == '') {
    $query1 = frontend;
    $query1ans = 'home';
}
$fcontroller = SERVER_ROOT . '/protected/controller/frontend/' . $query1ans . '_controller.php';
$fview = SERVER_ROOT . '/protected/views/frontend/' . $query1ans . ".php";
if ($query1ans == "login" || $query1ans == 'chimpu_sidebar' || $query1ans == 'arunlogin' || $query1ans == 'signup' ||
    $query1ans == 'forgotpass' || $query1ans == 'forgot_password' || $query1ans == 'ajax' || $query1ans == 'test' || $query1ans == 'shashi_test' 
    || $query1ans == 'seoreport_page' || $query1ans == 'seoreport_splash') {
    if (file_exists($fview)){
        if (file_exists($fcontroller))
            require $fcontroller; 
        require $fview;
    }
}
elseif ($query1ans == "logout"){
    setcookie('remember_me', "", time() - 3600);
    $session->destroy('login', frontend);
}
elseif(!file_exists($fview) || $query1ans == 'installation_final' || $query1ans == 'installation'){
    header("HTTP/1.0 404 Not Found");
    require SERVER_ROOT . '/protected/views/frontend/404.php';
}
else{
    if(file_exists(SERVER_ROOT . '/protected/setting/frontend/common_data.php')) {
        require SERVER_ROOT . '/protected/setting/frontend/common_data.php';
    }
    if(file_exists(SERVER_ROOT . '/protected/setting/frontend/header.php')) {
        if($query1ans!='pdfgenerate')
        require SERVER_ROOT . '/protected/setting/frontend/header.php';
    }
    if(file_exists(SERVER_ROOT . '/protected/setting/frontend/sidebar.php')) {
        require SERVER_ROOT . '/protected/setting/frontend/sidebar.php';
    }
    if(file_exists($fview)) {
        if (file_exists($fcontroller))
            require $fcontroller;
            require $fview;
    }
    if (file_exists(SERVER_ROOT . '/protected/setting/frontend/footer.php')) {
        require SERVER_ROOT . '/protected/setting/frontend/footer.php';
    }
}
?>