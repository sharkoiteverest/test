<?php

// подключение
function Sql_connect() {
    mysql_connect('localhost', 'root', '');
    mysql_select_db('test');
}

// запрос
function Sql_exec($sql) { 
    
    Sql_connect();
    mysql_query($sql);
}

// выполнение запроса
function Sql_query($sql) { 
    
    Sql_connect();
    
    $res = mysql_query($sql);
    
    $ret = []; // заводим пустой массив
    
    // перебираем ассоц-й массив, пока он не вернет нам false
    while (false !== $row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
    return $ret;
}