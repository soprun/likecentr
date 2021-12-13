<?php
declare(strict_types=1);

final class EntityRepository
{
    public function findOneByIdField(int $id): ?Entity
    {
        return new Entity($id);
    }
}