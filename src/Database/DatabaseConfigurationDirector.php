<?php


namespace App\Database;


class DatabaseConfigurationDirector implements DatabaseConfigurationDirectorInterface
{
    private DatabaseConfigurationBuilderInterface $builder;

    public function __construct(DatabaseConfigurationBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function build(string $driver, string $databaseName,
                          string $host, string $username, string $password) : DatabaseConfigurationBuilderInterface
    {
        $this->builder->setDriver($driver);
        $this->builder->setDatabaseName($databaseName);
        $this->builder->setHost($host);
        $this->builder->setUsername($username);
        $this->builder->setPassword($password);
        return $this->builder;
    }
}