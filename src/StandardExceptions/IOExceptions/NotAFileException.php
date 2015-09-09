<?php
namespace StandardExceptions\IOExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an IO operation tries to do something on a
* file but the passed on item is not a file. (Such as a directory instead)
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class NotAFileException extends \RuntimeException
{
    use ThrowIf;

    public function __construct($message = 'Target resource is not a file', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}