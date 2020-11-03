<?php

Class Overview{

    private array $objects = [];

    public function getSummary(){
        return $this ->objects;
    }
    public function setSummary($par){
        $this->objects = $par;
    }
}
