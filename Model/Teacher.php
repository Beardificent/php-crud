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

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGroup(): int
    {
        return $this->group;
    }

}