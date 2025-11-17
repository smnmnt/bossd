<?php



namespace Models\Users;

use Models\ActiveRecordEntity;

class User extends ActiveRecordEntity

{

    protected $nickname;

    protected $email;

    protected $isConfirmed;

    protected $role;

    protected $passwordHash;

    protected $authToken;

    protected $createdAt;



    public function getNickName(): string

    {

        return $this->nickname;

    }
    public function getEmail(): string

    {

        return $this->email;

    }

    protected static function getTableName(): string
    {
        return 'users';
    }
}