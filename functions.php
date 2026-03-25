<?php

function getPosts($pdo)
{
    $sql = "SELECT * FROM `posts`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($posts);
}
function getPost($pdo, $id){
    $sql = "SELECT * FROM `posts` WHERE id = :id"; 
    $stmt = $pdo->prepare($sql);
    if ($stmt->rowCount() === 1){
    $stmt->execute( ["id"=>$id]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($post);
    } else {
        http_response_code(404);
    $response = [
    "status" => false,
    "massage" => "Post not found."
        ];
        echo json_encode($response);
        }
    }