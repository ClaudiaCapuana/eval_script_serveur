<?php

namespace App\Models\CategoriesModel;
use \PDO;

function findAll(PDO $conn):array{
    $sql = "SELECT * FROM categories ORDER BY name ASC";
    $rs = $conn->prepare($sql);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findCategoriesByPostsID(PDO $conn, int $postID):array{
    $sql = "SELECT *, c.id AS categoryID
    FROM categories c 
    JOIN posts p ON c.id = p.category_id
    WHERE p.id = :postID";
    $rs = $conn->prepare($sql);
    $rs->bindValue (':postID', $postID,PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_COLUMN);
}