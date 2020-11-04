<?php

Class Teacher{

    protected int $id;
    protected string $name;
    protected int $group;

    public function __construct(int $id, string $name, int $group)
    {
        $this->id = $id;
        $this->name = $name;
        $this->group = $group;
    }
    public function getObject(){
        return $this;
    }

}