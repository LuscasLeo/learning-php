<?php

namespace Core\Domain\Entity\Traits;

use Exception;


trait MagicMethodTrait
{
    public function __get($property)
    {
        if ($this->{$property})
            return $this->{$property};

        $className = get_class($this);
        throw new Exception("Class ${className} has no attribute ${property}");

    }
}