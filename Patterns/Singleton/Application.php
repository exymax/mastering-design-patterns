<?php

namespace Patterns\Singleton;

class Application extends Singleton
{
    private $initialized = false;

    public function run()
    {
        $this->initialized = true;
    }

    public function processRequest()
    {
        if (!$this->initialized) {
            echo 'Request processed successfully';
            return false;
        }

        echo 'Something went wrong';
        return true;
    }

    public function stop()
    {
        $this->initialized = false;
    }
}