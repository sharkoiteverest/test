<!-- Представление (view) -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Галерея</title>
    </head>
    <body>
        <form action="/add.php" method="post" enctype="multipart/form-data">
            <input type="text" id="title" name="title">
            <input type="file" id="image" name="image">
            <input type="submit">
        </form>
        <a href="/">На главную</a>
    </body>
</html>