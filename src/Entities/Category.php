<?php


namespace RobotStores\Entities;


class Category implements RobotStores\Interfaces\CategoryInterface
{
    private int $id;

    private string $name;

    public function getID(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}