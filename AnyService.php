<?php
declare(strict_types=1);

final class AnyService
{
    public function __construct(public EntityRepository $entityRepository)
    {
    }

    public function execute()
    {
        $result = $this->entityRepository->findOneByIdField(123);

        if (!$result instanceof Entity) {
            throw new RuntimeException('An error has occurred, the entity has not been found!');
        }

        return $result;
    }
}