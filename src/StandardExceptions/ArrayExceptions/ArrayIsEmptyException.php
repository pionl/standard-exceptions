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
class ArrayIsEmptyException extends \RuntimeException
{
    use ThrowIf;

    /**
     * Throws exception if array is empty
     *
     * @param $value
     *
     * @return mixed
     * @throws static
     */
    static public function throwIf($value)
    {
        self::ifFalse(is_array($value) && empty($value));
        return $value;
    }


    public function __construct($message = 'Cannot remove items from array/collection, it is already empty', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }

}