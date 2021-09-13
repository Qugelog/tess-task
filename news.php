<?php 

if($_SERVER['REQUEST_URI'] == '/news.php?id=1') {
    try {
        $a = file_get_contents('news.txt');
        echo htmlspecialchars($a);
    } catch(Exception $e) {
        $e->getMessage();
    }
} else {
    echo 'А у нас нет новостей';
}