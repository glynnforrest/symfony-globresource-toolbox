<?php

namespace App\Foo;

use App\Bar\Bar;

/**
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class Foo
{
    protected $bar;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }

    public function getBar()
    {
        return $this->bar;
    }
}
