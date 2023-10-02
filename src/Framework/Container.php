<?php

declare(strict_types=1);

namespace Framework;

use ReflectionClass, ReflectionNamedType;
use Framework\Exceptions\ContainerException;

class Container
{
    private array $definitions = [];

    public function addDefinitions(array $newDefinitions)
    {
        $this->definitions = [...$this->definitions, ...$newDefinitions];
    }

    public function resolve(string $className)
    {
        $reflectionClass = new ReflectionClass($className);

        if (!$reflectionClass->isInstantiable()) {
            throw new ContainerException("Class {$className} is not instantiable");
        }

        $constructor = $reflectionClass->getConstructor();

        if (!$constructor) {
            return new $className;
        }

        $params = $constructor->getParameters();

        if (count($params) === 0) {
            return new $className;
        }

        $dependencies = [];

        foreach ($params as $param) {
            $name = $param->getName();
            $type = $param->getType();

            if (!$type) {
                throw new ContainerException("Failed to resolve clas {$className} because param {$name} is missing a type hint.");
            }

            if (!$type instanceof ReflectionNamedType || $type->isBuiltin()) {
                throw new ContainerException("Failed to resolve clas {$className} because invalid param {$name} name.");
            }

            $dependencies[] = $this->get($type->getName());
        }

        dd($dependencies);
    }

    // returns an instance of any dependency
    public function get(string $id)
    {
        // check if key does not exist in array
        if (!array_key_exists($id, $this->definitions)) {
            throw new ContainerException('Class ' . $id . " does not exist in the container.");
        }

        // if it exists
        $factory = $this->definitions[$id];
        $dependency = $factory();

        return $dependency;
    }
}
