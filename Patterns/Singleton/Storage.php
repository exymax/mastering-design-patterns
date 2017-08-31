<?php

namespace Patterns\Singleton;

class Storage extends Singleton
{
    private $storage = [];

    public function set($key, $value)
    {
        if (!array_key_exists($key, $this->storage)) {
            $this->storage[$key] = $value;

            return true;
        }

        return false;
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->storage)) {
            return $this->storage[$key];
        }

        return false;
    }

    public function remove($key)
    {
        if (array_key_exists($key, $this->storage)) {
            unset($this->storage[$key]);
        }

        return false;
    }

    public function getAll()
    {
        return $this->storage;
    }
}