<?php
namespace StandardExceptions\ArrayExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an operation on an array item that is locked/read-only
* tries to modify the item in question.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ReadOnlyArrayItemException extends \RuntimeException
{
    use ThrowIf;

    public function __construct($message = 'Array/Collection item is read-only, you cannot modify it', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}