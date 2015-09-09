<?php
namespace StandardExceptions\ValidationExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when the information being passed on to your function
* detects an invalid number in terms of domain validation. For example,
* the value must be within a certain range or in a set of valid values but isn't.
* 
* Refrain from using this exception in the event you want to certify the hard type
* passed to the function is right. If you force a (int) to be received but receive
* a (string), throw a \Logic\IllegalArgumentTypeException instead.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class InvalidNumberException extends InvalidValueException
{
    use ThrowIf;

    /**
     * Tests if the value is numeric
     *
     * @param $value
     *
     * @return mixed
     * @throws InvalidStringException
     */
    static public function throwIf($value)
    {
        self::ifFalse(is_numeric($value));

        return $value;
    }

    public function __construct($message = 'The data is not a valid number for this operation', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}