<?php 

require '../helpers.php';
require '../classes/ImageManager.php';


$status = false; // Вот здесь это ужасно вообще, так лучше не делать :D
$path = '../images/image-new.jpg';


/* Здесь всё довольно плохо, сделано просто для примера */
try {
    $img = new ImageManager(ROOT . '/images/image.jpg');

    $img->resize(200, 100);
    
    // Избегаем повторного создания файла
    if(!file_exists('../images/image-new.jpg')) {
        $img->save('../images/image-new.jpg');
        $status = true;
    }
    $status = true;
} catch (Exception $e) {
    $e->getMessage();
}

?>


<?php if ($status): ?>
    <h1>Старая картинка</h1>
        <a href="/images/image.jpg" target="_blank">Открыть в новой вкладке</a>
        <hr />
    <h1>Новая картинка (Сохранена под другим названием)</h1>
        <img src="../images/image-new.jpg" alt="">
<?php else: ?>
    Картинки нет, уж извините :)
<?php endif; ?>
