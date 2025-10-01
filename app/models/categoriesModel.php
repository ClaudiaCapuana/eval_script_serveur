<?php

namespace App\Models\CategoriesModel;
use \PDO;

function findAll(PDO $conn):array{
    $sql = "SELECT * FROM categories ORDER BY name ASC";
    $rs = $conn->prepare($sql);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findAllWithTheirsPosts(PDO $conn):array{
    $sql = "SELECT c.*, c.id AS categoryID, COUNT(p.id) AS postsCount
    FROM categories c 
    JOIN posts p ON c.id = p.category_id
    GROUP BY c.id
    ORDER BY c.name ASC";
    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
