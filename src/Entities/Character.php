<?php


namespace RobotStores\Entities;


class Character implements \RobotStores\Interfaces\CharacterInterface
{
    private int $id;

    private string $name;

    private string $image;

    private string $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}