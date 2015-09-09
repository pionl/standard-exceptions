<?php
namespace StandardExceptions\IOExceptions;
use StandardExceptions\Traits\ThrowIf;

/**
* Use this exception when an IO operation that requires a distant connection
* gets cut off after negotiating connection.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class ConnectionLostException extends \RuntimeException
{
    use ThrowIf;

    public function __construct($message = 'Connection lost while exchanging data with remote host', $code = 0, $previous = NULL)
    {
    	parent::__construct($message, $code, $previous);
    }
    
}