<?php

namespace App\Writer;

interface Writer
{
    /**
     * Write data
     *
     * @param array $data
     */
    public function write(array $data) : void;
}