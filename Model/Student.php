<?php

Class Student{

    private int $id;
    private string $name;
    private string $email;
    private int $group;

    public function __construct(int $id, string $name, string $email, int $group)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->group = $group;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getGroup(): int
    {
        return $this->group;
    }
    public function getObject(){
        return $this;
    }

}