<?php



namespace Controllers;


use Models\Articles\Article;
use Services\DB;
use View\View;


class MainController

{

    private View $view;

    public function __construct()

    {

        $this->view = new View(__DIR__ . '/../../templates');

    }



    public function main()

    {

        $articles = Article::findAll();

        $this->view->renderHtml('main/main.php', ['articles' => $articles]);

    }

    public function sayHello(string $name)

    {

        $this->view->renderHtml('main/hello.php', [
            'name' => $name,
            'title' => "Страница приветствия"
        ]);

    }
    public function sayBye(string $name)

    {

        $this->view->renderHtml('main/bye.php', ['name' => $name]);

    }
}


