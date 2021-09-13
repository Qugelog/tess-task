<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Тестовые задания | Дроздов Илья</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mb-5">Тестовые задания</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 border-dark">
                <img src="https://imgholder.ru/300/8493a8/adb9ca&text=Задание+№1&font=kelson&fz=50" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Задание №1</h5>
                    <p class="card-text">В переменной <span class="text-danger">$a</span> лежит текст новости. В переменной <span class="text-danger">$link</span> лежит ссылка на страницу с полным текстом этой новости.</p>
                    <p>Нужно в переменную <span class="text-danger">$b</span> записать сокращенный текст новости по правилам:
                        <ul>
                            <li>обрезать до 180 символов
                            <li>приписать многоточие</li>
                            <li>последние 2 слова и многоточие сделать ссылкой на полный текст новости.</li>
                        </ul>
                    </p>
                </div>
                <div class="d-grid gap-2 mb-5 col-9 mx-auto">
                        <a class="btn btn-outline-dark">GitHub</a>
                        <a  href="/tasks/task1.php" class="btn btn-outline-dark">Перейти к примеру</a>
                </div>      
                <div class="card-footer">
                    <small class="text-muted"><strong>Статус: </strong> <span class="text-success">Выполнено</span></small>
                </div>
                </div> 
            </div>
            <div class="col">
                <div class="card h-100 border-dark">
                <img src="https://imgholder.ru/300/8493a8/adb9ca&text=Задание+№2&font=kelson&fz=50" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Задание №2</h5>
                    <p class="card-text">На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.</p>
                </div>
                <div class="d-grid gap-2 mb-5 col-9 mx-auto">
                        <a class="btn btn-outline-dark">GitHub</a>
                        <a  href="/tasks/task2.php" class="btn btn-outline-dark">Перейти к примеру</a>
                </div>    
                <div class="card-footer">
                     <small class="text-muted"><strong>Статус: </strong> <span class="text-success">Выполнено</span></small>
                </div>
                </div> 
            </div>
            <div class="col">
                <div class="card border-dark h-100">
                <img src="https://imgholder.ru/300/8493a8/adb9ca&text=Задание+№3&font=kelson&fz=50" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Задание №3</h5>
                    <p class="card-text">Чем отличаются эти запросы:
                        <ol>
                            <li>SELECT * FROM a, b WHERE a.id=b.a_id;</li>
                            <li>SELECT * FROM a JOIN b ON a.id=b.a_id;</li>
                        </ol>
                    </p>
                </div>
                <div class="d-grid gap-2 mb-5 col-9 mx-auto">
                        <a class="btn btn-outline-dark" id="task3" data-bs-toggle="modal" data-bs-target="#task3Modal">Перейти</a>
                    </div> 
                <div class="card-footer">
                    <small class="text-muted"><strong>Статус: </strong> <span class="text-success">Выполнено</span></small>
                </div>
                </div> 
            </div>  
            <div class="col">
                <div class="card border-dark h-100">
                <img src="https://imgholder.ru/300/8493a8/adb9ca&text=Задание+№4&font=kelson&fz=50" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Задание №4</h5>
                    <p class="card-text">
                        Дан массив из 100 элементов. Требуется вывести количество последовательных пар одинаковых элементов.
                    </p>
                    <p>
                        <strong>Например: 1, 1, 2, 3, 4 -51, 12, 12, 12, -51 </strong>
                    </p>
                </div>
                <div class="d-grid gap-2 mb-5 col-9 mx-auto">
                        <a class="btn btn-outline-dark">GitHub</a>
                        <a href="/tasks/task4.php" class="btn btn-outline-dark">Перейти</a>
                    </div> 
                <div class="card-footer">
                    <small class="text-muted"><strong>Статус: </strong> <span class="text-success">Выполнено</span></small>
                </div>
                </div> 
            </div>        
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="task3Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Задание №3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?= file_get_contents('tasks/task3.txt'); ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>