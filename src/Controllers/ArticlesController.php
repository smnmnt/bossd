<?php



namespace Controllers;



use Models\Articles\Article;
use Models\Users\User;


use View\View;



class ArticlesController

{

    private View $view;


    public function __construct()

    {

        $this->view = new View(__DIR__ . '/../../templates');

    }


    public function add(): void

    {
        $this->view->renderHtml('articles/create.php', ['title' => 'Создание']);

        $author = User::getById(1);

        if (!empty($_POST)) {

            $article = new Article();

            $article->setAuthor($author);

            $name = $_POST['FormControlName'] ?? '';
            $text = $_POST['FormControlText'] ?? '';

            if ($name === '' || $text === '') {
                return;
            }

            $article->setName($name);
            $article->setText($text);

            $article->save();

            header('Location: /www/');
            exit;
        }

    }
    public function show(int $articleId): void

    {
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $author = User::getById($article->getAuthorId());

        $this->view->renderHtml('articles/show.php', ['article' => $article, 'author' => $author]);

    }
    public function edit(int $articleId): void

    {
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $author = User::getById($article->getAuthorId());

        $this->view->renderHtml('articles/edit.php', ['article' => $article, 'author' => $author, 'title' => 'Редактирование']);

        if (!empty($_POST)) {

            $name = $_POST['FormControlName'] ?? '';
            $text = $_POST['FormControlText'] ?? '';

            if ($name === '' || $text === '') {
                return;
            }

            $article->setName($name);
            $article->setText($text);

            $article->save();

            header('Location: /article/'.$article->getId());
            exit;
        }

    }

    public function delete(int $articleId): void

    {

        $article = Article::getById($articleId);


        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $article->delete();

        header('Location: /www/');
        exit;
    }
}