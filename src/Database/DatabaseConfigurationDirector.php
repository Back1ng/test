<?php


namespace App\Database;


class DatabaseConfigurationDirector
{
    private DatabaseConfigurationBuilderInterface $builder;

    public function __construct(DatabaseConfigurationBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function build($driver, $databaseName, $host, $username, $password) : DatabaseConfigurationBuilderInterface
    {
        $this->builder->setDriver($driver);
        $this->builder->setDatabaseName($databaseName);
        $this->builder->setHost($host);
        $this->builder->setUsername($username);
        $this->builder->setPassword($password);
        return $this->builder;
    }
}