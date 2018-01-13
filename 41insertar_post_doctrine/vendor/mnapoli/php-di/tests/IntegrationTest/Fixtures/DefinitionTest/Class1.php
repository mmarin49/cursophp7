<?php

namespace DI\Test\IntegrationTest\Fixtures\DefinitionTest;

class Class1
{
    public $count = 0;
    public $items = [];

    public function increment()
    {
        $this->count++;
    }

    public function add($item)
    {
        $this->items[] = $item;
    }
}
