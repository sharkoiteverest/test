<?php

require __DIR__.'/models/photo.php';
require __DIR__.'/functions/file.php';

if (!empty($_POST)) {
    
    $data = []; // заведем массив, в который будем помещать название картинки и ее путь
    
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title']; // положем в массив то, что пришло из формы
    }
    
    // если что-то пришло из $_FILES, то выполняется функция File_upload
    if (!empty($_FILES)) {
        $res = File_upload('image');
        
        // если не false, то в массив кладем результат работы этой функции
        if (false !== $res) { 
            $data['image'] = $res;
        }
    }
    if (isset($data['title']) && isset($data['image'])) {
        Photo_insert($data);
        header('Location: /');
        die;
    }
}

include __DIR__.'/views/add.php';