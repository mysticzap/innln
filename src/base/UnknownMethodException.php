<?php
/**
 * @link http://www.innln.com/
 * @copyright Copyright (c) 2008 Innln Software LLC
 * @license http://www.innln.com/license/
 */

namespace innln\base;

/**
 * UnknownMethodException represents an exception caused by accessing an unknown object method.
 */
class UnknownMethodException extends \BadMethodCallException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Method';
    }
}
