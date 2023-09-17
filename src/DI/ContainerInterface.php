<?php

namespace Rexolve\Interfaces\DI;

interface ContainerInterface
{
    public function get(string $key): mixed;

    public function has(string $key): bool;

    public function set(string $key, mixed $value): static;

    public function setMany(array $definitions): static;

    public function invoke(string $class, string $method, array $parameters): mixed;
}