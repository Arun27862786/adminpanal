<?php
/* directory that contain classes */
$classesDir = array(
    SERVER_ROOT . '/protected/library/'
);
/* loading all library components in everywhere */
spl_autoload_register(function ($class)
{
    global $classesDir;
    foreach ($classesDir as $directory) {
        if (file_exists($directory . $class . '_class.php')) {
            require ($directory . $class . '_class.php');
            return;
        }
    }
});
$db = new db("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
$fv = new form_validations();
$feature = new feature();
$link = new links();
$session = new session();
/**
 * This controller routes all incoming requests to the appropriate controller and page
 */
if(strstr($_SERVER['REQUEST_URI'], '?') && strstr($_SERVER['REQUEST_URI'], 'user') && SEO==0)
{
$request = explode('?', $_SERVER['REQUEST_URI']);
$parsed = explode('=', $request['1']);
$query3ans = $parsed['3'];
$query1 = $parsed['0'];
$getParsed = explode('&', $parsed['1']);
$query1ans = $getParsed['0'];
$query2 = $getParsed['1'];
$query2ans = $parsed['2'];
$query2ans_extended = explode('&', $query2ans);
$query2ans = $query2ans_extended['0'];
$query3 = $query2ans_extended['1'];
if($query2==backend)
    require SERVER_ROOT . '/protected/setting/backendcases.php';
    else
        require SERVER_ROOT . '/protected/setting/frontendcases.php';
}
else {
#remove the directory path we don't want
$request  = str_replace(SCRIPT_DIR_PATH."/", "", $_SERVER['REQUEST_URI']);
#split the path by '/'
$params     = explode("/", $request);
$query1=frontend;
$query1ans=$params[0];
$query2=backend;
$query2ans=$params[1];
$query3ans=$params[2];
if($query1ans==backend)
    require SERVER_ROOT . '/protected/setting/backendcases.php';
else
    require SERVER_ROOT . '/protected/setting/frontendcases.php';       
}
?>  