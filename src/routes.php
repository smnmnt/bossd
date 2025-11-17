<?php



return [

    '~^hello/(.*)$~' => [\Controllers\MainController::class, 'sayHello'],
    '~^bye/(.*)$~' => [\Controllers\MainController::class, 'sayBye'],


    '~^article/(\d+)$~' => [\Controllers\ArticlesController::class, 'show'],
    '~^article/(\d+)/edit$~' => [\Controllers\ArticlesController::class, 'edit'],
    '~^article/add$~' => [\Controllers\ArticlesController::class, 'add'],
    '~^article/(\d+)/delete$~' => [\Controllers\ArticlesController::class, 'delete'],

    '~^$~' => [\Controllers\MainController::class, 'main'],

];