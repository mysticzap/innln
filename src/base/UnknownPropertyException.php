<?php
/**
 * @link http://www.innln.com/
 * @copyright Copyright (c) 2008 Innln Software LLC
 * @license http://www.innln.com/license/
 */

namespace innln\base;

/**
 * UnknownPropertyException represents an exception caused by accessing unknown object properties.
 *
 */
class UnknownPropertyException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Property';
    }
}
