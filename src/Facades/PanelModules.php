<?php

namespace Laraxot\PanelModules\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laraxot\PanelModules\PanelModules
 */
class PanelModules extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Laraxot\PanelModules\PanelModules::class;
    }
}
