<?php
//http://api.blog.ru/post/2
require 'connectDB.php';

require 'functions.php';
die($PRINT_R($_SERVER));
header('Content-Type: application/json');


    $params = explode('/',$_GET['q']);
    $type = $params[0];
    if(isset($params[1])){
    $id = $params[1];
    }


switch($method){
    case "get";
    if ($type === "posts")
        {if (isset($id)){
        //вывод одного поста
        echo getPost($pdo, $id);
    } else {
        getPosts($pdo);
            }
        }
        break;
        case "POST";
        echo "rid";
    }




