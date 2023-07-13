<?php

namespace App\Views;

abstract class View
{ 
    protected array $datas = [];
    protected string $file; 

    public function __construct(array $datas, string $file){

        $this->file = $file;

    }

    public function getTemplate(){

        return file_get_contents($this->file);

    }

    public function getContentHTML(){
        $search = array_map(fn ($value) => '{{' . $value . '}}', array_keys($this->datas));
        return str_replace($search, array_values($this->datas), $this->getTemplate());
    }

}
