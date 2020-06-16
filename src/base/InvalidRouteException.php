<?php

namespace innln\base;

/**
 * InvalidRouteException represents an exception caused by an invalid route.
 *
 */
class InvalidRouteException extends UserException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Route';
    }
}
