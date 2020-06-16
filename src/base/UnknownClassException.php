<?php
/**
 * @link http://www.innln.com/
 * @copyright Copyright (c) 2008 Innln Software LLC
 * @license http://www.innln.com/license/
 */

namespace innln\base;

/**
 * UnknownClassException represents an exception caused by using an unknown class.
 */
class UnknownClassException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Class';
    }
}
