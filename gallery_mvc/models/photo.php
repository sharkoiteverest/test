<?php
// Модель (model)

require_once __DIR__.'/../functions/sql.php';

// функция получения фотографий из БД
function Photo_getAll() {
    
    Sql_connect();
    
    $sql = 'SELECT * FROM images'; // запрос всех эл-в из images
    
    return Sql_query($sql);
}

// загрузка в БД
function Photo_insert($data) {
    $sql = "INSERT INTO images (title, path) VALUES ('" . $data['title'] . "', '" . $data['image'] . "')";
    Sql_exec($sql);
}