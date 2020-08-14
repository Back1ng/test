<?php

namespace App\Database;

class DB
{
    private $connection;

    /**
     * Creates a connection.
     *
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->connection = new \PDO(
            $configuration->getDriver() .
            ":host=" . $configuration->getHost() .
            ";dbname=" . $configuration->getDBName(),
            $configuration->getUsername(),
            $configuration->getPassword()
        );
    }

    /**
     * Searches all rows in a table
     *
     * @param string $tableName
     * @return array
     */
    public function findAll(string $tableName) : array
    {
        $sth = $this->connection->prepare("SELECT * FROM {$tableName}");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * Collects branch data into an array of objects
     *
     * @param string $branchID
     * @return array
     */
    public function previewBranch(int $branchID) : array
    {
        $sth = $this->connection->prepare("
            SELECT j.name as work, w.name, w.surname, b.name as branch
            FROM workers w 
            inner join jobs j on w.job_id = j.id
            inner join branches b on w.branch_id = b.id
            WHERE w.branch_id = {$branchID}
            ORDER BY w.name ASC
        ");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_OBJ);
    }
}