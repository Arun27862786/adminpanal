<?php
if (! isset($query2ans) || $query2 == '' || $query2ans == '') {
    $query2 = backend;
    $query2ans = 'home';
}
$fcontroller = SERVER_ROOT . '/protected/controller/backend/' . $query2ans . '_controller.php';
$fview = SERVER_ROOT . '/protected/views/backend/' . $query2ans . ".php";
if ($query2ans == "login" || $query2ans == 'test' ||$query2ans == 'blogin' ||$query2ans == 'signup' ||
    $query2ans == 'forgot_password'  || $query2ans == 'ajax' ||$query2ans == 'test_new' || $query2ans == 'test2') {
    if (file_exists($fview)) {
        if (file_exists($fcontroller))
            require $fcontroller;
        require $fview;
    }
}
elseif($query2ans == "logout"){
    setcookie('remember_me', "", time() - 3600);
    $session->destroy('login', backend);
}
elseif(!file_exists($fview) || $query2ans == 'installation_final' || $query2ans == 'installation'){
    header("HTTP/1.0 404 Not Found");
    require SERVER_ROOT . '/protected/views/backend/404.php';
}
else{
    if(file_exists(SERVER_ROOT . '/protected/setting/backend/common_data.php')) {
        require SERVER_ROOT . '/protected/setting/backend/common_data.php';
    }
    if(file_exists(SERVER_ROOT . '/protected/setting/backend/header.php')) {
        if($query2ans!='pdfgenerate')
        require SERVER_ROOT . '/protected/setting/backend/header.php';
    }
    if(file_exists(SERVER_ROOT . '/protected/setting/backend/sidebar.php')) {
        require SERVER_ROOT . '/protected/setting/backend/sidebar.php';
    }
    if(file_exists($fview)){
        if (file_exists($fcontroller))
            require $fcontroller;
        require $fview;
    }
    if(file_exists(SERVER_ROOT . '/protected/setting/backend/footer.php')) {
        require SERVER_ROOT . '/protected/setting/backend/footer.php';
    }
}
?>