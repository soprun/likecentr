<?php
declare(strict_types=1);

class Entity
{
    public function __construct(private int $id)
    {
    }

    final public function getId(): int
    {
        return $this->id;
    }

    final function getException(): void
    {
        throw new DomainException('View exception!');
    }
}