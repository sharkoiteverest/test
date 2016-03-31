<?php
// Контроллер (controller)

require __DIR__.'/models/photo.php';

// результат выполнения функции записываем в переменную
$items = Photo_getAll();

include __DIR__.'/views/index.php';