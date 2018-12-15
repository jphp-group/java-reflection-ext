<?php

namespace java\reflection;


class ReflectionObject
{
    /**
     * @return ReflectionClass
     */
    public function getReflectionClass(): ReflectionClass {}

    /**
     * @param $data
     * @return bool
     */
    public function equals($data): bool {}

    /**
     * Get jPHP data
     */
    public function toMemory() {}
}