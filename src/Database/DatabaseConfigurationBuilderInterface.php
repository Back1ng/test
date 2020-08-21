<?php


namespace App\Database;


interface DatabaseConfigurationBuilderInterface extends DatabaseConfigurationInterface
{
    public function setDriver(string $driver) : self;
    public function setHost(string $host) : self;
    public function setDatabaseName(string $databaseName) : self;
    public function setUsername(string $username) : self;
    public function setPassword(string $password) : self;
}