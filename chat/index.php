<?php
include __DIR__."/startdb.php";
include __DIR__."/model.php";

startdb();

if (!empty($_POST)) {
    send_message($_POST['name'], $_POST['text']);
    header('Location: /index.php');
    exit;
}

$messages = get_messages();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Чат</title>
    </head>
    <body>
        <form method="post">
            Ваше имя:
            <input type="text" name="name">
            <br>
            <br>
            Сообщение:
            <input type="text" name="text">
            <br>
            <br>
            <input type="submit">
        </form>
        <hr>
        <?php
        foreach ($messages as $m) {
            echo "<p>";
            echo "<i>" . $m['dt'] . ' - ' . $m['name'] . "</i><br>";
            echo $m['text'];
            echo "</p>";
        }
        ?>
    </body>
</html>