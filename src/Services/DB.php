<?php



namespace Services;



class DB

{
    private static $instance;
    private $pdo;



    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function __construct()

    {

        $dbOptions = (require __DIR__ . '/../settings.php');



        $this->pdo = new \PDO(

            'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],

            $dbOptions['user'],

            $dbOptions['password']

        );

        $this->pdo->exec('SET NAMES UTF8');

    }



    public function query(string $sql, $params = [], string $className = 'stdClass'): ?array

    {

        $sth = $this->pdo->prepare($sql);

        $result = $sth->execute($params);



        if (false === $result) {

            return null;

        }


        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);

    }

    public function getLastInsertId(): int
    {
        return (int) $this->pdo->lastInsertId();
    }

}