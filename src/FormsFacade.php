<?php

namespace Metadeck\Forms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Metadeck\Forms\Skeleton\SkeletonClass
 */
class FormsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'forms';
    }
}
