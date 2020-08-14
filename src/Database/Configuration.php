<?php

namespace App\Database;

class Configuration
{
    private $driver;
    private $host;
    private $dbName;
    private $username;
    private $password;

    /**
     * Configuration constructor.
     *
     * @param string $driver
     * @param string $host
     * @param string $dbName
     * @param string $username
     * @param string $password
     */
    public function __construct(string $driver, string $host, string $dbName, string $username, string $password)
    {
        $this->driver   = $driver;
        $this->host     = $host;
        $this->dbName   = $dbName;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getDriver() : string
    {
        return $this->driver;
    }

    /**
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getDBName() : string
    {
        return $this->dbName;
    }

    /**
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
}