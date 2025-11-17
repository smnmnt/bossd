<?php



namespace Models\Articles;


use Models\ActiveRecordEntity;
use Models\Users\User;
use Services\DB;


class Article extends ActiveRecordEntity

{

    protected $name;

    protected $text;

    protected $authorId;

    protected $createdAt;

    // getters
    public function getName(): string

    {

        return $this->name;

    }

    public function getText(): string

    {

        return $this->text;

    }


    public function getAuthorId(): string

    {

        return $this->authorId;

    }

    public function getAuthor(): ActiveRecordEntity
    {

        return User::getById($this->authorId);

    }
    // setters

    public function setName(string $name): void
    {

        $this->name = $name;

    }
    public function setText(string $string): void
    {

        $this->text = $string;

    }
    public function setAuthor(User $author): void
    {

        $this->authorId = $author->getId();

    }
    protected static function getTableName(): string

    {

        return 'articles';

    }

}