<?php


namespace App\Database;


interface DatabaseConfigurationInterface
{
    public function getDriver() : string;
    public function getHost() : string;
    public function getDatabaseName() : string;
    public function getUsername() : string;
    public function getPassword() : string;
}