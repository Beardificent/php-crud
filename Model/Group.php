<?php

Class Group
{
    private int $id;
    private string $name;
    private string $location;

    public function __construct(int $id, string $name, string $location)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
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

    public function getLocation(): string
    {
        return $this->location;
    }


}
