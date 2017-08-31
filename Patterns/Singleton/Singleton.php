<?php

namespace Patterns\Singleton;

class Singleton
{
    protected static $instance;

    protected function __construct() {}

    private function __clone() {}

    private function __wakeup() {}

    public function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getName()
    {
        return __CLASS__;
    }
}