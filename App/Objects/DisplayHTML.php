<?php

namespace App\Objects;

abstract class DisplayHTML
{
    private string $filename; 
    private bool $use_include_path;
    private int $offset;

    public function __construct(string $filename, bool $use_include_path = false, int $offset = 0)
    {
        $this->filename; 
        $this->use_include_path;
        $this->offset; 
    }

    public function file_get_contents($filename, $use_include_path, $offset){
        $this->filename = $filename;
        $this->use_include_path = $use_include_path;
        $this->offset = $offset; 
    }

}