<?php

namespace ScriptFUSION\Porter\Provider\Object;

use ScriptFUSION\Porter\Connector\Connector;
use ScriptFUSION\Porter\Provider\DataSource\ProviderDataSource;
use ScriptFUSION\Porter\Provider\Provider;

class ObjectProvider extends Provider
{
    public function __construct()
    {
        parent::__construct(new ObjectConnector);
    }
}
