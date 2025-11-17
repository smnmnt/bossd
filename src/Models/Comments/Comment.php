<?php


//CREATE TABLE `bossd`.`comments`
// (`id` INT(11) NOT NULL AUTO_INCREMENT ,
// `author_id` INT(11) NOT NULL ,
// `article_id` INT(11) NOT NULL ,
// `text` TEXT NOT NULL ,
// `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
// PRIMARY KEY (`id`)) ENGINE = InnoDB;

namespace Models\Comments;


use Models\ActiveRecordEntity;
use Models\Users\User;
use Models\Articles\Article;
use Services\DB;


class Comment extends ActiveRecordEntity

{

    protected $text;

    protected $authorId;

    protected $articleId;

    protected $createdAt;

    // getters

    public function getText(): string

    {

        return $this->text;

    }


    public static function getAllWhere(int $articleId): array

    {

        $db = DB::getInstance();

        return $db->query(
            'SELECT * FROM `' . self::getTableName() . '` WHERE article_id = :articleId;',
            [':articleId' => $articleId],
            self::class);

    }
    public function getAuthorId(): string

    {

        return $this->authorId;

    }

    public function getAuthor(): ActiveRecordEntity
    {

        return User::getById($this->authorId);

    }


    public function getArticleId(): string

    {

        return $this->articleId;

    }
    // setters

    public function setAuthor(User $author): void
    {

        $this->authorId = $author->getId();

    }
    public function setArticle(Article $article): void
    {

        $this->articleId = $article->getId();

    }
    public function setText(string $string): void
    {

        $this->text = $string;

    }

    protected static function getTableName(): string

    {

        return 'comments';

    }

}