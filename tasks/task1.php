<?php 

/**
 * Текст новости
 */

$a = file_get_contents('../news.txt'); 



/* Ссылка на полную новость */
$link = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/news.php?id=1';



$b = mb_substr($a, 180) . '...';

/* Поиск последних 2х слов в посте */

preg_match('~[\S]+[\s]{1}[\S]+$~u', $b, $end);

$content = 'Тут текст';

if(!empty($end[0])) 
{
    $content = $end[0];
}


echo '<a href="' . $link . '">' . $content . '</a>';



