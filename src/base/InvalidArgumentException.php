<?php
namespace innln\base;

/**
 * InvalidArgumentException represents an exception caused by invalid arguments passed to a method.
 *
 */
class InvalidArgumentException extends \BadMethodCallException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Argument';
    }
}
