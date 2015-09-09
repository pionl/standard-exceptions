<?php
namespace StandardExceptions\ArrayExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an operation on an array tries to retrieve an element using a key
* that doesn't exist in the collection of items.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class KeyNotFoundException extends \OutOfBoundsException
{
    use ThrowIf;

    public function __construct($message = 'Key not found in array/collection', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}