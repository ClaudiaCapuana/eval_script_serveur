<?php

namespace App\Models\PostsModel;
use \PDO;


function findAll(PDO $conn, int $limit = 10): array {
    $sql = "
        SELECT 
            p.id AS postsId,
            p.title,
            p.text,
            p.created_at,
            c.id AS categoryId,
            c.name AS categoryName
        FROM posts p
        JOIN categories c ON p.category_id = c.id
        ORDER BY p.created_at DESC
        LIMIT :limit
    ";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}


function findOneByID(PDO $conn, int $id):array {
$sql = " SELECT 
            p.id AS postsId,
            p.title,
            p.text,
            p.created_at,
            c.id AS categoryId,
            c.name AS categoryName
        FROM posts p
        JOIN categories c ON p.category_id = c.id
        WHERE p.id = :id
        ORDER BY p.created_at DESC ";
$rs = $conn->prepare($sql);
$rs->bindValue( ':id',$id, PDO::PARAM_INT);
$rs->execute();
return $rs->fetch(PDO::FETCH_ASSOC);
}
