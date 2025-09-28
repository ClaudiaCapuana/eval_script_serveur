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

// function insert(PDO $conn, array $data)
// {
//     $sql = "INSERT INTO posts
//             SET
//             title = :title,
//            `text` = :text,
//             quote = :quote,
//             category_id =  :category,
           
//             created_at = NOW()";
//     $rs = $conn->prepare($sql);
//     $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
//     $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
   
//     $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
//     $rs->bindValue(':category', $data['category_id'], PDO::PARAM_INT);
  
//     return $rs->execute();
// }  



// function insert(PDO $conn, array $data)
// {
//     $imageName = $_FILES['image']['name'] ?? null;

//     $sql = "INSERT INTO posts 
//             (title, `text`, quote, category_id, image, created_at)
//             VALUES 
//             (:title, :text, :quote, :category, :image, NOW())";

//     $rs = $conn->prepare($sql);
//     $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
//     $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
//     $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
//     $rs->bindValue(':category', $data['category_id'], PDO::PARAM_INT);
//     $rs->bindValue(':image', $imageName, PDO::PARAM_STR);

//     return $rs->execute();
// }


function insert(PDO $conn, array $data)
{
   

    // Requête SQL
    $sql = "INSERT INTO posts 
            (title, `text`, quote, category_id, created_at)
            VALUES 
            (:title, :text, :quote, :category, NOW())";

    $rs = $conn->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category', $data['category_id'], PDO::PARAM_INT);
  

    return $rs->execute();
}
