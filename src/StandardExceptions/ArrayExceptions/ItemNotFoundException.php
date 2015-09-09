<?php
namespace StandardExceptions\ArrayExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an operation on an array to retrieve an expected element from it
* but that element doesn't exist in the collection of items.
* 
* There is a subtle difference with KeyNotFoundException whereas the KeyNotFoundException is
* used when a user wants to find a specific element by key and ItemNotFoundException is part of
* an operation that expected an array result containing and element X and it didn't not exist. 
* For example, using ItemNotFoundException in a datasource fetch that failed finding a specific
* result would be the best use case.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ItemNotFoundException extends \OutOfBoundsException
{
    use ThrowIf;

    public function __construct($message = 'Expected specific item in array/collection not found', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}