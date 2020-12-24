<?php

namespace Lichess\Hydrator;

use TypeError;

abstract class AbstractHydrator
{
    protected static string $entityClass;

    public function hydrateOne(object $data): object
    {
        $entity = new static::$entityClass();

        foreach ($data as $key => $val) {
            try {
                $entity->$key = $val;
            } catch (TypeError $e) { }
        }

        return $entity;
    }
}