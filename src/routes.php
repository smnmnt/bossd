<?php



return [

    '~^hello/(.*)$~' => [\Controllers\MainController::class, 'sayHello'],
    '~^bye/(.*)$~' => [\Controllers\MainController::class, 'sayBye'],


    '~^article/(\d+)$~' => [\Controllers\ArticlesController::class, 'show'],
    '~^article/(\d+)/edit$~' => [\Controllers\ArticlesController::class, 'edit'],
    '~^article/add$~' => [\Controllers\ArticlesController::class, 'add'],
    '~^article/(\d+)/delete$~' => [\Controllers\ArticlesController::class, 'delete'],

    '~^article/(\d+)/comments$~' => [\Controllers\CommentsController::class, 'add'],
    '~^comment/(\d+)/edit$~' => [\Controllers\CommentsController::class, 'edit'],
    '~^comment/(\d+)/delete$~' => [\Controllers\CommentsController::class, 'delete'],

    '~^$~' => [\Controllers\MainController::class, 'main'],

];