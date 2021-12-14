<?php
declare(strict_types=1);

final class AnyService
{
    public function __construct(public EntityRepository $entityRepository)
    {
    }

    public function execute(/** Какой паттерн нужно использовать для передачи данных */)
    {
        $entity = $this->entityRepository->findOneByIdField(123);

        if (!$entity instanceof Entity) {
            throw new RuntimeException('An error has occurred, the entity has not been found!');
        }

        // Вызывает `throw new DomainException`
        if ($entity->getId() === 10) {
            $entity->getException();
        }

        return $entity;
    }
}