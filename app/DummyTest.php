<?php

namespace App;

class DummyTest
{
    private Dummy $dummy;

    public function __construct()
    {
        $this->dummy = new Dummy();

        $name = $this->dummy->name;
    }
}
