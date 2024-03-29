<?php


define('HAHAHA_START', microtime(true));


/*
簡易初始化
*/



if(mb_strpos($_SERVER['REQUEST_URI'], "/hahaha", 0) === 0)
{
    // 柄
    require __DIR__ . "/../project/hahaha/hahaha/public/index.php";
}
else if(mb_strpos($_SERVER['REQUEST_URI'], "/migrate", 0) === 0)
{
    // 整合
    require __DIR__ . "/../project/migrate/migrate/public/index.php";
}
else if(mb_strpos($_SERVER['REQUEST_URI'], "/backend", 0) === 0)
{
    // 後台
    require __DIR__ . "/../project/backend/backend/public/index.php";
}
// --------------------------------------------------------------- 
else if(mb_strpos($_SERVER['REQUEST_URI'], "/doctrine2", 0) === 0)
{
    // 後台
    require __DIR__ . "/../project/doctrine2/doctrine2/public/index.php";
}
else if(mb_strpos($_SERVER['REQUEST_URI'], "/doctrine3", 0) === 0)
{
    // 後台
    require __DIR__ . "/../project/doctrine3/doctrine3/public/index.php";
}
// --------------------------------------------------------------- 
else if(mb_strpos($_SERVER['REQUEST_URI'], "/api", 0) === 0)
{
    // api
    require __DIR__ . "/../project/api/api/public/api.php";
}
else if(mb_strpos($_SERVER['REQUEST_URI'], "/demo", 0) === 0)
{
    // laravel demo
    require __DIR__ . "/../project/demo/public/index.php";
}
else
{
    // 前台
    require __DIR__ . "/../project/frontend/frontend/public/index.php";
}
