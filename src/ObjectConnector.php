<?php

namespace ScriptFUSION\Porter\Provider\Object;

use ScriptFUSION\Porter\Connector\Connector;
use ScriptFUSION\Porter\Options\EncapsulatedOptions;

/**
 * Provides a method for fetching data from a remote source.
 */
class ObjectConnector implements Connector
{
    public function fetch($source, EncapsulatedOptions $options = null)
    {
        $reflector = new \ReflectionClass($source);
        return $reflector->getProperties();
    }
}
