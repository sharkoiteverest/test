<?php

function send_message($name, $text) {
    
    $name = trim($name);
    $text = trim($text);
    
    if ($name == "" || $text == "") {
        return;
    }
    
    $dt = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO messages (dt, name, text) VALUES ('$dt', '$name', '$text')";
    $res = mysql_query($sql);
    
}

function get_messages() {
    
    $sql = "SELECT * FROM messages ORDER BY dt DESC";
    $res = mysql_query($sql);
    
    $arr = [];
    
    while (false != $row=mysql_fetch_assoc($res)) {
        $arr[] = $row;
    }
    return $arr;
}
