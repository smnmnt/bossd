<?php



namespace Controllers;



use Models\Comments\Comment;
use Models\Articles\Article;
use Models\Users\User;


use View\View;



class CommentsController

{

    private View $view;


    public function __construct()

    {

        $this->view = new View(__DIR__ . '/../../templates');

    }


    public function add(int $articleId): void

    {
        $this->view->renderHtml('comment/create.php', ['title' => 'Создание']);

        $author = User::getById(1);
        $article = Article::getById($articleId);

        if (!empty($_POST)) {

            $comment = new Comment();

            $comment->setAuthor($author);
            $comment->setArticle($article);

            $text = $_POST['FormControlText'] ?? '';

            if ($text === '') {
                return;
            }

            $comment->setText($text);

            $comment->save();

            header('Location: /article/'. $article->getId() . '#comment' . $comment->getId());
            exit;
        }

    }
    public function edit(int $commentId): void

    {
        $comment = Comment::getById($commentId);

        if ($comment === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $author = User::getById($comment->getAuthorId());
        $article = Article::getById($comment->getArticleId());

        $this->view->renderHtml('comment/edit.php', ['comment' => $comment, 'author' => $author, 'title' => 'Редактирование']);

        if (!empty($_POST)) {

            $text = $_POST['FormControlText'] ?? '';

            if ($text === '') {
                return;
            }

            $comment->setText($text);

            $comment->save();

            header('Location: /article/'.$article->getId());
            exit;
        }

    }
    public function delete(int $commentId): void

    {

        $comment = Comment::getById($commentId);


        if ($comment === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }
        $articleId = $comment->getArticleId();
        $comment->delete();

        header('Location: /article/'.$articleId);
        exit;
    }
}