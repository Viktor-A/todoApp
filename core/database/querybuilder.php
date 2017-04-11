<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
<<<<<<< HEAD

    public function insert($table, $parameters)
    {
        $sql = sprintf(

            'insert into %s (%s) values (%s)',

            $table,

            implode(', ', array_keys($parameters)),

            ':' . implode(', :', array_keys($parameters))
        );

        try {

        $statement = $this->pdo->prepare($sql);

        $statement->execute($parameters);

        } catch (Exception $e) {
            die('Whoops, something went wrong.');
        }


    }


}

=======
}
>>>>>>> 9d05c6dfd4e8b6442945d64a6579ea0cdfa37f7d
