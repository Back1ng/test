<?php


namespace App\Database;


interface DatabaseConfigurationDirectorInterface
{
    public function build(string $driver, string $databaseName,
                          string $host, string $username, string $password) : DatabaseConfigurationBuilderInterface;
}