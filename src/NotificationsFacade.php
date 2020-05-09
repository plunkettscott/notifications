<?php

namespace Responseams\Notifications;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Responseams\Notifications\Skeleton\SkeletonClass
 */
class NotificationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'notifications';
    }
}
