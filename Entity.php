<?php
declare(strict_types=1);

class Entity
{
    public function __construct(public int $id)
    {
    }

    final public function getId(): int
    {
        return $this->id;
    }
}