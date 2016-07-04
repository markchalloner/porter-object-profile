<?php

namespace ScriptFUSION\Porter\Provider\Object;

use ScriptFUSION\Porter\Connector\Connector;
use ScriptFUSION\Porter\Provider\DataSource\ProviderDataSource;

class ObjectData implements ProviderDataSource
{
    private $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

    public function getProviderName()
    {
        return ObjectProvider::class;
    }

    public function fetch(Connector $connector)
    {
        $properties = $connector->fetch($this->object);
        foreach ($properties as $property) {
            $property->setAccessible(true);
            yield [
                'name' => $property->getName(),
                'value' => $property->getValue($this->object),
            ];
        }
    }
}
