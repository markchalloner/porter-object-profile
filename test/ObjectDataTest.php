<?php

namespace ScriptFUSIONTest\Porter\Provider\Object;

use ScriptFUSION\Porter\Provider\Object\ObjectProvider;
use ScriptFUSION\Porter\Provider\Object\ObjectData;
use ScriptFUSION\Porter\Porter;
use ScriptFUSION\Porter\Specification\ImportSpecification;

final class ObjectDataTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $object = new TestObject;
        $properties = (new Porter())
            ->addProvider(new ObjectProvider)
            ->import(new ImportSpecification(new ObjectData($object)))
        ;
        $result = iterator_to_array($properties);
        echo '';
    }
}

class TestObject {
    private $id = 1;
    private $name = "Widget";
    private $type = "General";
}
