<?php
/**
 * @link http://www.innln.com/
 * @copyright Copyright (c) 2008 Innln Software LLC
 * @license http://www.innln.com/license/
 */

namespace innln\base;

/**
 * InvalidCallException represents an exception caused by calling a method in a wrong way.
 */
class InvalidCallException extends \BadMethodCallException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Call';
    }
}
