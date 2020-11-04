<?php

Class Student{

    protected int $id;
    protected string $name;
    private string $email;
    protected int $group;

    public function __construct(int $id, string $name, string $email, int $group)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->group = $group;
    }
    public function getObject(){
        return $this;
    }

}