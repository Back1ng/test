<?php


namespace App\Database;


class DatabaseConfigurationBuilder implements DatabaseConfigurationBuilderInterface
{
    private string $driver;
    private string $host;
    private string $databaseName;
    private string $username;
    private string $password;

    public function getDriver() : string
    {
        return $this->driver;
    }

    public function getHost() : string
    {
        return $this->host;
    }

    public function getDatabaseName() : string
    {
        return $this->databaseName;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setDriver(string $driver) : self
    {
        $this->driver = $driver;

        return $this;
    }

    public function setHost(string $host) : self
    {
        $this->host = $host;

        return $this;
    }

    public function setDatabaseName(string $databaseName) : self
    {
        $this->databaseName = $databaseName;

        return $this;
    }

    public function setUsername(string $username) : self
    {
        $this->username = $username;

        return $this;
    }

    public function setPassword(string $password) : self
    {
        $this->password = $password;

        return $this;
    }

    public function getDsn() : string
    {
        if ($this->getDriver() !== null &&
            $this->getHost() !== null &&
            $this->getDatabaseName() !== null) {
            return $this->getDriver() . ":host=" . $this->getHost() . ";dbname=" . $this->getDatabaseName();
        }
    }
}