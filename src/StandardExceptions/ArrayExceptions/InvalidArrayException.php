<?php
namespace StandardExceptions\ArrayExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an operation on an array
* cannot be achieved because the array is already empty.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidArrayException extends \RuntimeException
{
    use ThrowIf;

    /**
     * Throws exception if not array
     *
     * @param $value
     *
     * @return mixed
     * @throws static
     */
    static public function throwIf($value)
    {
        self::ifFalse(is_array($value));
        return $value;
    }


    public function __construct($message = 'Value is not valide array', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }

}